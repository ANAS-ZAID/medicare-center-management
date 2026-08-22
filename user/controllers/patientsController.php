<?php

include $patientsData;

class PatientsController
{
    static function fetchAllPatients()
    {
        return PatientsData::fetchAllPatients();
    }
}

if (fileetrRequest("page", "get") === "index" || fileetrRequest("page", "get") === null) {
    include $scerennIndexPatient;
}
