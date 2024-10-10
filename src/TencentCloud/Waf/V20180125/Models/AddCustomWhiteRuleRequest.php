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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddCustomWhiteRule request structure.
 *
 * @method string getName() Obtain Rule name
 * @method void setName(string $Name) Set Rule name
 * @method string getSortId() Obtain Priority
 * @method void setSortId(string $SortId) Set Priority
 * @method string getExpireTime() Obtain Expiration time
 * @method void setExpireTime(string $ExpireTime) Set Expiration time
 * @method array getStrategies() Obtain Policy details
 * @method void setStrategies(array $Strategies) Set Policy details
 * @method string getDomain() Obtain Domain name for adding policy
 * @method void setDomain(string $Domain) Set Domain name for adding policy
 * @method string getBypass() Obtain Details of release
 * @method void setBypass(string $Bypass) Set Details of release
 * @method string getJobType() Obtain Scheduled task type
 * @method void setJobType(string $JobType) Set Scheduled task type
 * @method JobDateTime getJobDateTime() Obtain Scheduled task configuration
 * @method void setJobDateTime(JobDateTime $JobDateTime) Set Scheduled task configuration
 */
class AddCustomWhiteRuleRequest extends AbstractModel
{
    /**
     * @var string Rule name
     */
    public $Name;

    /**
     * @var string Priority
     */
    public $SortId;

    /**
     * @var string Expiration time
     */
    public $ExpireTime;

    /**
     * @var array Policy details
     */
    public $Strategies;

    /**
     * @var string Domain name for adding policy
     */
    public $Domain;

    /**
     * @var string Details of release
     */
    public $Bypass;

    /**
     * @var string Scheduled task type
     */
    public $JobType;

    /**
     * @var JobDateTime Scheduled task configuration
     */
    public $JobDateTime;

    /**
     * @param string $Name Rule name
     * @param string $SortId Priority
     * @param string $ExpireTime Expiration time
     * @param array $Strategies Policy details
     * @param string $Domain Domain name for adding policy
     * @param string $Bypass Details of release
     * @param string $JobType Scheduled task type
     * @param JobDateTime $JobDateTime Scheduled task configuration
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new Strategy();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Bypass",$param) and $param["Bypass"] !== null) {
            $this->Bypass = $param["Bypass"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("JobDateTime",$param) and $param["JobDateTime"] !== null) {
            $this->JobDateTime = new JobDateTime();
            $this->JobDateTime->deserialize($param["JobDateTime"]);
        }
    }
}
