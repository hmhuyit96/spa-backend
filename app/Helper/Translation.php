<?php

namespace App\Helper;

class Translation
{
    public static $UNAUTHORIZED = "UNAUTHORIZED";
    public static $NO_PERMISSION = "NO_PERMISSION";
    public static $USER_TYPE_REQUIRED = "USER_TYPE_REQUIRED";
    public static $UPDATE_SUCCESS = 'UPDATED SUCCESS';
    public static $UPDATE_FAILURE = 'UPDATED FAILURE';
    public static $GET_SINGLE_SUCCESS = 'GET_SINGLE_SUCCESS';
    public static $GET_SINGLE_FAILURE = 'GET_SINGLE_FAILURE';
    public static $GET_LIST_SUCCESS = "GET_LIST_SUCCESS";
    public static $GET_LIST_EMPTY = "GET_LIST_EMPTY";
    public static $CREATED = 'CREATED';
    public static $UPDATED = 'UPDATED';
    public static $DELETED = 'DELETED';
    public static $GET = 'GET';

    public static $NOT_FOUND = 'NOT_FOUND';

    public static $DELETE_ERROR = 'DELETE_ERROR';
    public static $DELETE_SUCCESS = 'DELETED';
    public static $DELETE_NOTHING = 'NOTHING TO DELETE';

    public static $SERVICE_CREATED = "SERVICE_CREATED";
    public static $SERVICE_CREATE_ERROR = "SERVICE_CREATE_ERROR";
    public static $SERVICE_UPDATED = "SERVICE_UPDATED";
    public static $SERVICE_UPDATED_FAILURE = "SERVICE_UPDATED_FAILURE";

    public static $SERVICE_CATEGORY_CREATED = "SERVICE_CATEGORY_CREATED";
    public static $SERVICE_CATEGORY_CREATE_ERROR = "SERVICE_CATEGORY_CREATE_ERROR";
    public static $SERVICE_CATEGORY_UPDATED = "SERVICE_CATEGORY_UPDATED";
    public static $SERVICE_CATEGORY_UPDATED_FAILURE = "SERVICE_CATEGORY_UPDATED_FAILURE";
    public static $GET_ALL_SERVICE_SUCCESS = "GET_ALL_SERVICE_SUCCESS";
    public static $GET_ALL_SERVICE_CATEGORY_SUCCESS = "GET_ALL_SERVICE_CATEGORY_SUCCESS";
    public static $NO_SERVICE_FOUND = "NO_SERVICE_FOUND";
    public static $NO_SERVICE_CATEGORY_FOUND = "NO_SERVICE_CATEGORY_FOUND";
    public static $DELETE_SERVICE_SUCCESS = "DELETE_SERVICE_SUCCESS";
    public static $DELETE_SERVICE_CATEGORY_FAILURE = "DELETE_SERVICE_CATEGORY_FAILURE";
    public static $DELETE_SERVICE_FAILURE = "DELETE_SERVICE_FAILURE";
    public static $DELETE_SERVICE_CATEGORY_SUCCESS = "DELETE_SERVICE_CATEGORY_SUCCESS";

    public static $GET_ALL_ROLE_SUCCESS = "GET_ALL_ROLE_SUCCESS";
    public static $NO_ROLE_FOUND = "NO_ROLE_FOUND";

    public static $USER_CREATED = "USER_CREATED";
    public static $USER_UPDATED = "USER_UPDATED";
    public static $USER_UPDATE_FAILURE = "USER_UPDATE_FAILURE";
    public static $GET_SINGLE_USER_SUCCESS = "GET_SINGLE_USER_SUCCESS";
    public static $GET_ALL_USER_SUCCESS = "GET_ALL_USER_SUCCESS";
    public static $NO_USER_FOUND = "NO_USER_FOUND";
    public static $USERNAME_EXIST = "USERNAME_EXIST";
    public static $DELETE_USER_SUCCESS = "DELETE_USER_SUCCESS";
    public static $DELETE_USER_FAILURE = "DELETE_USER_FAILURE";
    public static $WRONG_PASSWORD = "WRONG_PASSWORD";

    public static $CUSTOMER_CREATED = "CUSTOMER_CREATED";
    public static $CUSTOMER_UPDATED = "CUSTOMER_UPDATED";
    public static $CUSTOMER_UPDATE_FAILURE = "CUSTOMER_UPDATE_FAILURE";
    public static $CUSTOMER_DO_NOT_HAVE_ENOUGH_POINT = "CUSTOMER_DO_NOT_HAVE_ENOUGH_POINT";
    public static $GET_SINGLE_CUSTOMER_SUCCESS = "GET_SINGLE_CUSTOMER_SUCCESS";
    public static $GET_ALL_CUSTOMER_SUCCESS = "GET_ALL_CUSTOMER_SUCCESS";
    public static $NO_CUSTOMER_FOUND = "NO_CUSTOMER_FOUND";
    public static $CUSTOMER_EXIST = "CUSTOMER_EXIST";
    public static $PHONE_EXIST = "PHONE_EXIST";
    public static $DELETE_CUSTOMER_SUCCESS = "DELETE_CUSTOMER_SUCCESS";
    public static $DELETE_CUSTOMER_FAILURE = "DELETE_CUSTOMER_FAILURE";

    public static $COMBO_CREATED = "COMBO_CREATED";
    public static $COMBO_UPDATED = "COMBO_UPDATED";
    public static $COMBO_UPDATE_FAILURE = "COMBO_UPDATE_FAILURE";
    public static $GET_SINGLE_COMBO_SUCCESS = "GET_SINGLE_COMBO_SUCCESS";
    public static $GET_ALL_COMBO_SUCCESS = "GET_ALL_COMBO_SUCCESS";
    public static $NO_COMBO_FOUND = "NO_COMBO_FOUND";
    public static $COMBO_EXIST = "COMBO_EXIST";
    public static $DELETE_COMBO_SUCCESS = "DELETE_COMBO_SUCCESS";
    public static $DELETE_COMBO_FAILURE = "DELETE_COMBO_FAILURE";
    public static $COMBO_ALREADY_VALID = "COMBO_ALREADY_VALID";

    public static $PACKAGE_CREATED = "PACKAGE_CREATED";
    public static $GET_ALL_PACKAGE_SUCCESS = "GET_ALL_PACKAGE_SUCCESS";
    public static $PACKAGE_UPDATED = "PACKAGE_UPDATED";


    public static $INTAKE_CREATED = "INTAKE_CREATED";
    public static $INTAKE_UPDATED = "INTAKE_UPDATED";
    public static $INTAKE_UPDATE_FAILURE = "INTAKE_UPDATE_FAILURE";
    public static $GET_INTAKE_SUCCESS = "GET_INTAKE_SUCCESS";
    public static $GET_ALL_INTAKE_SUCCESS = "GET_ALL_INTAKE_SUCCESS";
    public static $NO_INTAKE_FOUND = "NO_INTAKE_FOUND";
    public static $INTAKE_EXIST = "INTAKE_EXIST";
    public static $DELETE_INTAKE_SUCCESS = "DELETE_INTAKE_SUCCESS";
    public static $DELETE_INTAKE_FAILURE = "DELETE_INTAKE_FAILURE";
    public static $INTAKE_NOT_APPROVE = "INTAKE_NOT_APPROVE";
    public static $INTAKE_ALREADY_REVIEWED = "INTAKE_ALREADY_REVIEWED";

    public static $INVOICE_CREATED = "INVOICE CREATED";
    public static $INVOICE_UPDATED = "INVOICE UPDATED";
    public static $GET_INVOICE_SUCCESS = "GET_INVOICE_SUCCESS";
    public static $DELETE_INVOICE_SUCCESS = "DELETE_INVOICE_SUCCESS";
    public static $NO_INVOICE_FOUND = "NO_INVOICE_FOUND";

    public static $TASK_CREATED = "TASK_CREATED";
    public static $GET_TASK_SUCCESSFULLY = "GET_TASK_SUCCESSFULLY";
    public static $TASK_UPDATED = "TASK_UPDATED";

    public static $GET_TASK_ASSIGNMENTS_SUCCESSFULLY = "GET_TASK_ASSIGNMENTS_SUCCESSFULLY";
    public static $TASK_ASSIGNMENT_UPDATED = "TASK_ASSIGNMENT_UPDATED";
    public static $TASK_ASSIGNMENT_DELETED = "TASK_ASSIGNMENT_DELETED";

    public static $JUDGEMENT_CREATED = "JUDGEMENT_CREATED";
    public static $JUDGEMENT_GET = "JUDGEMENT_GET_SUCCESS";
    public static $JUDGEMENT_UPDATED = "JUDGEMENT_UPDATED";
    public static $JUDGEMENT_DELETED = "JUDGEMENT_DELETED";

    public static $DISCOUNT_CREATED = "DISCOUNT_CREATED";
    public static $DISCOUNT_GET = "DISCOUNT_GET_SUCCESS";
    public static $DISCOUNT_UPDATED = "DISCOUNT_UPDATED";
    public static $DISCOUNT_DELETED = "DISCOUNT_DELETED";

    public static $SYSTEM_ERROR = "SYSTEM_ERROR";
    public static $INPUT_ERROR = "INPUT_ERROR";

    public static $GET_STATISTIC_SUCCESS = "GET_STATISTIC_SUCCESS";
}