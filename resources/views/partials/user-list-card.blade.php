<div ui-view="userListCard">
    <h1>Users</h1>

<div class="mdl-grid demo-content" ng-controller="UserListCardsController">

    {{--This is where the Table is being created.--}}
    <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
        <div id="grid1" ui-grid="gridOptions" ui-grid-selection class="user-grid"></div>
    </div>


    <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">


        <div ng-repeat="user in users"
             class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--3-col-desktop">
            <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2 class="mdl-card__title-text">@{{ user.name }}</h2>
            </div>
            <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                @{{ user.email }}
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Profile</a>
                <a ui-sref="userEdit" class="mdl-button mdl-js-button mdl-js-ripple-effect">Edit</a>
            </div>
        </div>
    </div>
</div>
</div>

</div>