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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListEmailIdentities response structure.
 *
 * @method array getEmailIdentities() Obtain List of sender domains.
 * @method void setEmailIdentities(array $EmailIdentities) Set List of sender domains.
 * @method integer getMaxReputationLevel() Obtain Maximum reputation level
 * @method void setMaxReputationLevel(integer $MaxReputationLevel) Set Maximum reputation level
 * @method integer getMaxDailyQuota() Obtain Maximum number of emails sent per domain name
 * @method void setMaxDailyQuota(integer $MaxDailyQuota) Set Maximum number of emails sent per domain name
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ListEmailIdentitiesResponse extends AbstractModel
{
    /**
     * @var array List of sender domains.
     */
    public $EmailIdentities;

    /**
     * @var integer Maximum reputation level
     */
    public $MaxReputationLevel;

    /**
     * @var integer Maximum number of emails sent per domain name
     */
    public $MaxDailyQuota;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $EmailIdentities List of sender domains.
     * @param integer $MaxReputationLevel Maximum reputation level
     * @param integer $MaxDailyQuota Maximum number of emails sent per domain name
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("EmailIdentities",$param) and $param["EmailIdentities"] !== null) {
            $this->EmailIdentities = [];
            foreach ($param["EmailIdentities"] as $key => $value){
                $obj = new EmailIdentity();
                $obj->deserialize($value);
                array_push($this->EmailIdentities, $obj);
            }
        }

        if (array_key_exists("MaxReputationLevel",$param) and $param["MaxReputationLevel"] !== null) {
            $this->MaxReputationLevel = $param["MaxReputationLevel"];
        }

        if (array_key_exists("MaxDailyQuota",$param) and $param["MaxDailyQuota"] !== null) {
            $this->MaxDailyQuota = $param["MaxDailyQuota"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
