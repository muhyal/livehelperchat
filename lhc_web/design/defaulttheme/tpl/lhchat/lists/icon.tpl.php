<span ng-if="chat.aicons"><i class="material-icons" ng-style="{'color': icon.c ? icon.c : '#6c757d'}" title="{{icon.t ? icon.t : icon.i}}" ng-repeat="icon in chat.aicons track by $index">{{icon.i || icon}}</i></span>