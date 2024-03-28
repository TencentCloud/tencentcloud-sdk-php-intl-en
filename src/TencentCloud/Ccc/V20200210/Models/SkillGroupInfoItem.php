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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Skill group information.
 *
 * @method integer getSkillGroupId() Obtain Skill group ID.
 * @method void setSkillGroupId(integer $SkillGroupId) Set Skill group ID.
 * @method string getSkillGroupName() Obtain Skill group name.
 * @method void setSkillGroupName(string $SkillGroupName) Set Skill group name.
 * @method string getType() Obtain (Deprecated) Type: IM, TEL, ALL (full media).
 * @method void setType(string $Type) Set (Deprecated) Type: IM, TEL, ALL (full media).
 * @method string getRoutePolicy() Obtain Session allocation policy.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRoutePolicy(string $RoutePolicy) Set Session allocation policy.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getUsingLastSeat() Obtain Whether the session is allocated to the last serviced agent first.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUsingLastSeat(integer $UsingLastSeat) Set Whether the session is allocated to the last serviced agent first.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxConcurrency() Obtain Maximum concurrency number of single client service (default 1 for telephone type).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxConcurrency(integer $MaxConcurrency) Set Maximum concurrency number of single client service (default 1 for telephone type).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getLastModifyTimestamp() Obtain Last modification time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastModifyTimestamp(integer $LastModifyTimestamp) Set Last modification time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSkillGroupType() Obtain Skill group type 0-phone, 1-online, 3-audio, 4-video.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSkillGroupType(integer $SkillGroupType) Set Skill group type 0-phone, 1-online, 3-audio, 4-video.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class SkillGroupInfoItem extends AbstractModel
{
    /**
     * @var integer Skill group ID.
     */
    public $SkillGroupId;

    /**
     * @var string Skill group name.
     */
    public $SkillGroupName;

    /**
     * @var string (Deprecated) Type: IM, TEL, ALL (full media).
     */
    public $Type;

    /**
     * @var string Session allocation policy.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RoutePolicy;

    /**
     * @var integer Whether the session is allocated to the last serviced agent first.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UsingLastSeat;

    /**
     * @var integer Maximum concurrency number of single client service (default 1 for telephone type).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxConcurrency;

    /**
     * @var integer Last modification time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastModifyTimestamp;

    /**
     * @var integer Skill group type 0-phone, 1-online, 3-audio, 4-video.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SkillGroupType;

    /**
     * @param integer $SkillGroupId Skill group ID.
     * @param string $SkillGroupName Skill group name.
     * @param string $Type (Deprecated) Type: IM, TEL, ALL (full media).
     * @param string $RoutePolicy Session allocation policy.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $UsingLastSeat Whether the session is allocated to the last serviced agent first.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxConcurrency Maximum concurrency number of single client service (default 1 for telephone type).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $LastModifyTimestamp Last modification time.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SkillGroupType Skill group type 0-phone, 1-online, 3-audio, 4-video.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }

        if (array_key_exists("SkillGroupName",$param) and $param["SkillGroupName"] !== null) {
            $this->SkillGroupName = $param["SkillGroupName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RoutePolicy",$param) and $param["RoutePolicy"] !== null) {
            $this->RoutePolicy = $param["RoutePolicy"];
        }

        if (array_key_exists("UsingLastSeat",$param) and $param["UsingLastSeat"] !== null) {
            $this->UsingLastSeat = $param["UsingLastSeat"];
        }

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }

        if (array_key_exists("LastModifyTimestamp",$param) and $param["LastModifyTimestamp"] !== null) {
            $this->LastModifyTimestamp = $param["LastModifyTimestamp"];
        }

        if (array_key_exists("SkillGroupType",$param) and $param["SkillGroupType"] !== null) {
            $this->SkillGroupType = $param["SkillGroupType"];
        }
    }
}
