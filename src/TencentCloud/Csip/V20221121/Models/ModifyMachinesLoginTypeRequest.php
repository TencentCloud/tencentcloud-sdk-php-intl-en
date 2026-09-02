<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMachinesLoginType request structure.
 *
 * @method integer getLoginType() Obtain <p>Login method: 0 - original method, 1 - scan code for password-free log-in</p>
 * @method void setLoginType(integer $LoginType) Set <p>Login method: 0 - original method, 1 - scan code for password-free log-in</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getInstanceIds() Obtain <p>instance_id list (at least one of instance_ids and quuids must be specified)</p>
 * @method void setInstanceIds(array $InstanceIds) Set <p>instance_id list (at least one of instance_ids and quuids must be specified)</p>
 * @method array getQuuids() Obtain <p>Host quuid list (fill in at least one of instance_ids and quuids)</p>
 * @method void setQuuids(array $Quuids) Set <p>Host quuid list (fill in at least one of instance_ids and quuids)</p>
 * @method array getExcludeQuuid() Obtain <p>Excluded quuid set</p>
 * @method void setExcludeQuuid(array $ExcludeQuuid) Set <p>Excluded quuid set</p>
 * @method integer getScope() Obtain <p>Enable scope: 0 - selected host, 1 - all hosts</p>
 * @method void setScope(integer $Scope) Set <p>Enable scope: 0 - selected host, 1 - all hosts</p>
 * @method integer getFrom() Obtain <p>Operation source:<br>0 Host Page<br>1 Client Settings page<br>2 Security Center page<br>3 LightHouse purchase page<br>4 LightHouse console</p>
 * @method void setFrom(integer $From) Set <p>Operation source:<br>0 Host Page<br>1 Client Settings page<br>2 Security Center page<br>3 LightHouse purchase page<br>4 LightHouse console</p>
 * @method integer getRequestVersion() Obtain <p>Request version 0   Original version 1   Policy-based request</p>
 * @method void setRequestVersion(integer $RequestVersion) Set <p>Request version 0   Original version 1   Policy-based request</p>
 */
class ModifyMachinesLoginTypeRequest extends AbstractModel
{
    /**
     * @var integer <p>Login method: 0 - original method, 1 - scan code for password-free log-in</p>
     */
    public $LoginType;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>instance_id list (at least one of instance_ids and quuids must be specified)</p>
     */
    public $InstanceIds;

    /**
     * @var array <p>Host quuid list (fill in at least one of instance_ids and quuids)</p>
     */
    public $Quuids;

    /**
     * @var array <p>Excluded quuid set</p>
     */
    public $ExcludeQuuid;

    /**
     * @var integer <p>Enable scope: 0 - selected host, 1 - all hosts</p>
     */
    public $Scope;

    /**
     * @var integer <p>Operation source:<br>0 Host Page<br>1 Client Settings page<br>2 Security Center page<br>3 LightHouse purchase page<br>4 LightHouse console</p>
     */
    public $From;

    /**
     * @var integer <p>Request version 0   Original version 1   Policy-based request</p>
     */
    public $RequestVersion;

    /**
     * @param integer $LoginType <p>Login method: 0 - original method, 1 - scan code for password-free log-in</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $InstanceIds <p>instance_id list (at least one of instance_ids and quuids must be specified)</p>
     * @param array $Quuids <p>Host quuid list (fill in at least one of instance_ids and quuids)</p>
     * @param array $ExcludeQuuid <p>Excluded quuid set</p>
     * @param integer $Scope <p>Enable scope: 0 - selected host, 1 - all hosts</p>
     * @param integer $From <p>Operation source:<br>0 Host Page<br>1 Client Settings page<br>2 Security Center page<br>3 LightHouse purchase page<br>4 LightHouse console</p>
     * @param integer $RequestVersion <p>Request version 0   Original version 1   Policy-based request</p>
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
        if (array_key_exists("LoginType",$param) and $param["LoginType"] !== null) {
            $this->LoginType = $param["LoginType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("ExcludeQuuid",$param) and $param["ExcludeQuuid"] !== null) {
            $this->ExcludeQuuid = $param["ExcludeQuuid"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("RequestVersion",$param) and $param["RequestVersion"] !== null) {
            $this->RequestVersion = $param["RequestVersion"];
        }
    }
}
