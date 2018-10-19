<!DOCTYPE html>
<html>
    <head>
        <title>Vue Js</title>
        <meta http-equiv="Pragma" content="no-cache" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            /* Enter and leave animations can use different */
            /* durations and timing functions.              */
            .slide-fade-enter-active {
              transition: all .3s ease;
            }
            .slide-fade-leave-active {
              transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
            }
            .slide-fade-enter, .slide-fade-leave-to
            /* .slide-fade-leave-active below version 2.1.8 */ {
              transform: translateX(10px);
              opacity: 0;
            }
        </style>
    </head>

<body>
    <div class="row" id="app">
        <div class="container">
            <h4>{{ appName }}</h4>
            <p>{{ description }} by {{ author }} <br>GitHub Link : <a href="https://github.com/manobalas/Vue-JS/">https://github.com/manobalas/Vue-JS/</a></p>
            <hr>
            <p class="hide-on-med-and-up show-on-small">If you are accessing this app in mobile, you cant able to add the user, view in Desktop</p>
            <div class="col s12 m4 hide-on-small-only">
                <h5>Add User</h5>
                <p>Fill the below form to get added in the table.</p>
                <transition name="slide-fade">
                    <p v-if="errr" style="color: red; margin-bottom: 20px" >Kinldy fill all the inputs.</p>
                    <p v-if="suc" style="color: green; margin-bottom: 20px" >Data Inserted Successfully</p>
                </transition>
                    <form @submit.prevent="createUser">
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <label for="f_name">First Name</label>
                            <input id="f_name" type="text" name="first_name" required>
                        </div>
                        <div class="input-field col s12 m6">
                            <label for="l_name">Last Name</label>
                            <input id="l_name" type="text" name="last_name" required>
                        </div>
                        <div class="input-field col s12 m12">
                            <label for="m_n">Mobile Number</label>
                            <input id="m_n" type="text" name="mobile_number" required>
                        </div>
                        <button type="submit" class="btn green white-text waves-effect waves-green" style="text-transform: none; border-radius: 25px">Create User</button>
                    </div>
                    </form>
            </div>
            <div class="col s12 m7 offset-m1">
                <h5>View User</h5>
                <p>Here you can see the data, added using the form</p>
                <table>
                    <thead>
                      <tr>
                          <th>Id</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Mobile</th>
                      </tr>
                    </thead>
            
                    <tbody>
                      <tr v-for="user in users">
                        <td>{{ user.id }}</td>
                        <td>{{ user.first_name }}</td>
                        <td>{{ user.last_name }}</td>
                        <td>{{ user.mobile_number }}</td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="app.js?<?php echo microtime(true); ?>"></script>
</body>
</html>
