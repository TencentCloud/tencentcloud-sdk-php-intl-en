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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information configured by user, including email configuration.
 *
 * @method string getProfileId() Obtain Configured ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProfileId(string $ProfileId) Set Configured ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProfileType() Obtain Configuration type. Valid values: `dbScan_mail_configuration` (email configuration of the database inspection report), `scheduler_mail_configuration` (email configuration of the scheduled task report).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProfileType(string $ProfileType) Set Configuration type. Valid values: `dbScan_mail_configuration` (email configuration of the database inspection report), `scheduler_mail_configuration` (email configuration of the scheduled task report).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProfileLevel() Obtain Configuration level. Valid values: `User` (user-level), `Instance` (instance-level). For database inspection emails, it should be `User`. For scheduled task emails, it should be `Instance`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProfileLevel(string $ProfileLevel) Set Configuration level. Valid values: `User` (user-level), `Instance` (instance-level). For database inspection emails, it should be `User`. For scheduled task emails, it should be `Instance`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProfileName() Obtain Configuration name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProfileName(string $ProfileName) Set Configuration name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ProfileInfo getProfileInfo() Obtain Configuration details.
 * @method void setProfileInfo(ProfileInfo $ProfileInfo) Set Configuration details.
 */
class UserProfile extends AbstractModel
{
    /**
     * @var string Configured ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProfileId;

    /**
     * @var string Configuration type. Valid values: `dbScan_mail_configuration` (email configuration of the database inspection report), `scheduler_mail_configuration` (email configuration of the scheduled task report).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProfileType;

    /**
     * @var string Configuration level. Valid values: `User` (user-level), `Instance` (instance-level). For database inspection emails, it should be `User`. For scheduled task emails, it should be `Instance`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProfileLevel;

    /**
     * @var string Configuration name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProfileName;

    /**
     * @var ProfileInfo Configuration details.
     */
    public $ProfileInfo;

    /**
     * @param string $ProfileId Configured ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProfileType Configuration type. Valid values: `dbScan_mail_configuration` (email configuration of the database inspection report), `scheduler_mail_configuration` (email configuration of the scheduled task report).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProfileLevel Configuration level. Valid values: `User` (user-level), `Instance` (instance-level). For database inspection emails, it should be `User`. For scheduled task emails, it should be `Instance`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProfileName Configuration name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ProfileInfo $ProfileInfo Configuration details.
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
        if (array_key_exists("ProfileId",$param) and $param["ProfileId"] !== null) {
            $this->ProfileId = $param["ProfileId"];
        }

        if (array_key_exists("ProfileType",$param) and $param["ProfileType"] !== null) {
            $this->ProfileType = $param["ProfileType"];
        }

        if (array_key_exists("ProfileLevel",$param) and $param["ProfileLevel"] !== null) {
            $this->ProfileLevel = $param["ProfileLevel"];
        }

        if (array_key_exists("ProfileName",$param) and $param["ProfileName"] !== null) {
            $this->ProfileName = $param["ProfileName"];
        }

        if (array_key_exists("ProfileInfo",$param) and $param["ProfileInfo"] !== null) {
            $this->ProfileInfo = new ProfileInfo();
            $this->ProfileInfo->deserialize($param["ProfileInfo"]);
        }
    }
}
