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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMailProfile request structure.
 *
 * @method ProfileInfo getProfileInfo() Obtain The content of email configuration.
 * @method void setProfileInfo(ProfileInfo $ProfileInfo) Set The content of email configuration.
 * @method string getProfileLevel() Obtain Configuration level. Valid values: "User" (user-level), "Instance" (instance-level). The email of database inspection report is configured as the user level, and the email of scheduled task report is configured as the instance level.
 * @method void setProfileLevel(string $ProfileLevel) Set Configuration level. Valid values: "User" (user-level), "Instance" (instance-level). The email of database inspection report is configured as the user level, and the email of scheduled task report is configured as the instance level.
 * @method string getProfileName() Obtain Name configuration, which needs to be unique. The email configuration name of database inspection report can be customize; the email configuration name of scheduled task report should in the format of "scheduler_" + {instanceId}, such as "schduler_cdb-test".
 * @method void setProfileName(string $ProfileName) Set Name configuration, which needs to be unique. The email configuration name of database inspection report can be customize; the email configuration name of scheduled task report should in the format of "scheduler_" + {instanceId}, such as "schduler_cdb-test".
 * @method string getProfileType() Obtain Configuration type. Valid values: "dbScan_mail_configuration" (email configuration of database inspection report), "scheduler_mail_configuration" (email configuration of scheduled task report).
 * @method void setProfileType(string $ProfileType) Set Configuration type. Valid values: "dbScan_mail_configuration" (email configuration of database inspection report), "scheduler_mail_configuration" (email configuration of scheduled task report).
 * @method string getProduct() Obtain Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TencentDB for CynosDB (compatible with MySQL)).
 * @method void setProduct(string $Product) Set Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TencentDB for CynosDB (compatible with MySQL)).
 * @method array getBindInstanceIds() Obtain Instance ID bound to the configuration, which is set when the configuration level is "Instance".
 * @method void setBindInstanceIds(array $BindInstanceIds) Set Instance ID bound to the configuration, which is set when the configuration level is "Instance".
 */
class CreateMailProfileRequest extends AbstractModel
{
    /**
     * @var ProfileInfo The content of email configuration.
     */
    public $ProfileInfo;

    /**
     * @var string Configuration level. Valid values: "User" (user-level), "Instance" (instance-level). The email of database inspection report is configured as the user level, and the email of scheduled task report is configured as the instance level.
     */
    public $ProfileLevel;

    /**
     * @var string Name configuration, which needs to be unique. The email configuration name of database inspection report can be customize; the email configuration name of scheduled task report should in the format of "scheduler_" + {instanceId}, such as "schduler_cdb-test".
     */
    public $ProfileName;

    /**
     * @var string Configuration type. Valid values: "dbScan_mail_configuration" (email configuration of database inspection report), "scheduler_mail_configuration" (email configuration of scheduled task report).
     */
    public $ProfileType;

    /**
     * @var string Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TencentDB for CynosDB (compatible with MySQL)).
     */
    public $Product;

    /**
     * @var array Instance ID bound to the configuration, which is set when the configuration level is "Instance".
     */
    public $BindInstanceIds;

    /**
     * @param ProfileInfo $ProfileInfo The content of email configuration.
     * @param string $ProfileLevel Configuration level. Valid values: "User" (user-level), "Instance" (instance-level). The email of database inspection report is configured as the user level, and the email of scheduled task report is configured as the instance level.
     * @param string $ProfileName Name configuration, which needs to be unique. The email configuration name of database inspection report can be customize; the email configuration name of scheduled task report should in the format of "scheduler_" + {instanceId}, such as "schduler_cdb-test".
     * @param string $ProfileType Configuration type. Valid values: "dbScan_mail_configuration" (email configuration of database inspection report), "scheduler_mail_configuration" (email configuration of scheduled task report).
     * @param string $Product Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TencentDB for CynosDB (compatible with MySQL)).
     * @param array $BindInstanceIds Instance ID bound to the configuration, which is set when the configuration level is "Instance".
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
        if (array_key_exists("ProfileInfo",$param) and $param["ProfileInfo"] !== null) {
            $this->ProfileInfo = new ProfileInfo();
            $this->ProfileInfo->deserialize($param["ProfileInfo"]);
        }

        if (array_key_exists("ProfileLevel",$param) and $param["ProfileLevel"] !== null) {
            $this->ProfileLevel = $param["ProfileLevel"];
        }

        if (array_key_exists("ProfileName",$param) and $param["ProfileName"] !== null) {
            $this->ProfileName = $param["ProfileName"];
        }

        if (array_key_exists("ProfileType",$param) and $param["ProfileType"] !== null) {
            $this->ProfileType = $param["ProfileType"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("BindInstanceIds",$param) and $param["BindInstanceIds"] !== null) {
            $this->BindInstanceIds = $param["BindInstanceIds"];
        }
    }
}
