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
 * @method integer getSkillGroupId() Obtain Skill group id.
 * @method void setSkillGroupId(integer $SkillGroupId) Set Skill group id.
 * @method string getSkillGroupName() Obtain Skill group name.
 * @method void setSkillGroupName(string $SkillGroupName) Set Skill group name.
 * @method string getType() Obtain (Deprecated) type: im, tel, all (full media).
 * @method void setType(string $Type) Set (Deprecated) type: im, tel, all (full media).
 * @method string getRoutePolicy() Obtain Session allocation policy.
 * @method void setRoutePolicy(string $RoutePolicy) Set Session allocation policy.
 * @method integer getUsingLastSeat() Obtain Whether the session is allocated to the last serviced agent first.
 * @method void setUsingLastSeat(integer $UsingLastSeat) Set Whether the session is allocated to the last serviced agent first.
 * @method integer getMaxConcurrency() Obtain Maximum concurrency number of single client service (default 1 for telephone type).
 * @method void setMaxConcurrency(integer $MaxConcurrency) Set Maximum concurrency number of single client service (default 1 for telephone type).
 * @method integer getLastModifyTimestamp() Obtain Last modification time.
 * @method void setLastModifyTimestamp(integer $LastModifyTimestamp) Set Last modification time.
 * @method integer getSkillGroupType() Obtain Skill group type 0-cell phone, 1-online, 3-audio, 4-video.	.	
 * @method void setSkillGroupType(integer $SkillGroupType) Set Skill group type 0-cell phone, 1-online, 3-audio, 4-video.	.	
 * @method string getAlias() Obtain Intra-Skill group line number.
 * @method void setAlias(string $Alias) Set Intra-Skill group line number.
 */
class SkillGroupInfoItem extends AbstractModel
{
    /**
     * @var integer Skill group id.
     */
    public $SkillGroupId;

    /**
     * @var string Skill group name.
     */
    public $SkillGroupName;

    /**
     * @var string (Deprecated) type: im, tel, all (full media).
     */
    public $Type;

    /**
     * @var string Session allocation policy.
     */
    public $RoutePolicy;

    /**
     * @var integer Whether the session is allocated to the last serviced agent first.
     */
    public $UsingLastSeat;

    /**
     * @var integer Maximum concurrency number of single client service (default 1 for telephone type).
     */
    public $MaxConcurrency;

    /**
     * @var integer Last modification time.
     */
    public $LastModifyTimestamp;

    /**
     * @var integer Skill group type 0-cell phone, 1-online, 3-audio, 4-video.	.	
     */
    public $SkillGroupType;

    /**
     * @var string Intra-Skill group line number.
     */
    public $Alias;

    /**
     * @param integer $SkillGroupId Skill group id.
     * @param string $SkillGroupName Skill group name.
     * @param string $Type (Deprecated) type: im, tel, all (full media).
     * @param string $RoutePolicy Session allocation policy.
     * @param integer $UsingLastSeat Whether the session is allocated to the last serviced agent first.
     * @param integer $MaxConcurrency Maximum concurrency number of single client service (default 1 for telephone type).
     * @param integer $LastModifyTimestamp Last modification time.
     * @param integer $SkillGroupType Skill group type 0-cell phone, 1-online, 3-audio, 4-video.	.	
     * @param string $Alias Intra-Skill group line number.
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

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
