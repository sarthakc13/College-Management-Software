/**
 * Created by sadhikari on 8/19/2016.
 */
app.factory('RoleRESTClient', function ($resource) {
    return $resource('api/role/:id'); // This part defines the Rest Client for QWERTY
});