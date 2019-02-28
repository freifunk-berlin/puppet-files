#!/bin/sh

log() {
  logger -t community-tunnel_openvpn $1
  echo >&2 $1
}

up_actions() {
        log "running up-actions"
        UPLINK_IF=`ip route |grep default|awk '{print $5}'`
        if [ -z $UPLINK_IF ]; then
                log "no interface with default-route found"
                IFS=" :"
                IF_LIST=`ip --oneline link show|grep -v "lo:"|grep -v "$TUNNEL_IF:"`
                if [ `echo $IF_LIST |wc -l` = 1 ]; then
                        log "found one possible uplink-interface"
                        UPLINK_IF=`echo $IF_LIST|awk '{print $2}'`
                fi
        fi
        log "uplink interface: $UPLINK_IF"
        # create table for our tunnel
        # ignore error when already there
        iptables -N community-tunnel 2>/dev/null
        # check for rule managing out forward-traffic
        # and install
        log "checking for / setup of MASQUERADING"
        iptables -t nat -C POSTROUTING -s "$TUNNEL_IP/$TUNNEL_MASK" -o $UPLINK_IF -j MASQUERADE 2>/dev/null || \
                iptables -t nat -I POSTROUTING -s $TUNNEL_IP/$TUNNEL_MASK -o $UPLINK_IF -j MASQUERADE 2>/dev/null
        log "checking for / setup of rules for tunnel-clients"
        iptables -C INPUT -i $TUNNEL_IF -j community-tunnel || \
                iptables -I INPUT -i $TUNNEL_IF -j community-tunnel
        iptables -C FORWARD -i $TUNNEL_IF -j community-tunnel || \
                iptables -I FORWARD -i $TUNNEL_IF -j community-tunnel
        iptables -F community-tunnel
        iptables -A community-tunnel -o $UPLINK_IF -j ACCEPT
        iptables -A community-tunnel -j REJECT --reject-with net-prohib
}

down_actions() {
        log "running down-actions"
        log "stopping all FORWARDING from tunnel"
        iptables -F community-tunnel
        iptables -A community-tunnel -j REJECT --reject-with net-prohib
}

if [ $# -eq 0 ]; then
  log "too few number of arguments"
  exit 1
fi

if [ $1 = "up" ]; then
        TUNNEL_IF=$2
        TUNNEL_IP=$5
        TUNNEL_MASK=$6
        up_actions
elif [ $1 = "down" ]; then
  down_actions
else
  log "bad parameter: $1"
fi

