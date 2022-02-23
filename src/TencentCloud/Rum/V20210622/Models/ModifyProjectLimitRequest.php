<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProjectLimit request structure.
 *
 * @method integer getProjectID() Obtain Project ID
 * @method void setProjectID(integer $ProjectID) Set Project ID
 * @method string getProjectInterface() Obtain Project API
 * @method void setProjectInterface(string $ProjectInterface) Set Project API
 * @method integer getReportRate() Obtain Reporting rate. 10 means 10%
 * @method void setReportRate(integer $ReportRate) Set Reporting rate. 10 means 10%
 * @method integer getReportType() Obtain Reporting type. 1: rate; 2: number of reported data entries
 * @method void setReportType(integer $ReportType) Set Reporting type. 1: rate; 2: number of reported data entries
 * @method integer getID() Obtain Primary key ID
 * @method void setID(integer $ID) Set Primary key ID
 */
class ModifyProjectLimitRequest extends AbstractModel
{
    /**
     * @var integer Project ID
     */
    public $ProjectID;

    /**
     * @var string Project API
     */
    public $ProjectInterface;

    /**
     * @var integer Reporting rate. 10 means 10%
     */
    public $ReportRate;

    /**
     * @var integer Reporting type. 1: rate; 2: number of reported data entries
     */
    public $ReportType;

    /**
     * @var integer Primary key ID
     */
    public $ID;

    /**
     * @param integer $ProjectID Project ID
     * @param string $ProjectInterface Project API
     * @param integer $ReportRate Reporting rate. 10 means 10%
     * @param integer $ReportType Reporting type. 1: rate; 2: number of reported data entries
     * @param integer $ID Primary key ID
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("ProjectInterface",$param) and $param["ProjectInterface"] !== null) {
            $this->ProjectInterface = $param["ProjectInterface"];
        }

        if (array_key_exists("ReportRate",$param) and $param["ReportRate"] !== null) {
            $this->ReportRate = $param["ReportRate"];
        }

        if (array_key_exists("ReportType",$param) and $param["ReportType"] !== null) {
            $this->ReportType = $param["ReportType"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
