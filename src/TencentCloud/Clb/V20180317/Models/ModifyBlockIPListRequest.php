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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBlockIPList request structure.
 *
 * @method array getLoadBalancerIds() Obtain CLB instance ID
 * @method void setLoadBalancerIds(array $LoadBalancerIds) Set CLB instance ID
 * @method string getType() Obtain Operation type. Valid values:
<li> add_customized_field (sets header initially to enable the blocklist feature)</li>
<li> set_customized_field (modifies header)</li>
<li> del_customized_field (deletes header)</li>
<li> add_blocked (adds IPs to blocklist)</li>
<li> del_blocked (deletes IPs from blocklist)</li>
<li> flush_blocked (clears blocklist)</li>
 * @method void setType(string $Type) Set Operation type. Valid values:
<li> add_customized_field (sets header initially to enable the blocklist feature)</li>
<li> set_customized_field (modifies header)</li>
<li> del_customized_field (deletes header)</li>
<li> add_blocked (adds IPs to blocklist)</li>
<li> del_blocked (deletes IPs from blocklist)</li>
<li> flush_blocked (clears blocklist)</li>
 * @method string getClientIPField() Obtain Header field that stores real client IPs
 * @method void setClientIPField(string $ClientIPField) Set Header field that stores real client IPs
 * @method array getBlockIPList() Obtain List of blocked IPs. The array can contain up to 200,000 entries in one operation.
 * @method void setBlockIPList(array $BlockIPList) Set List of blocked IPs. The array can contain up to 200,000 entries in one operation.
 * @method integer getExpireTime() Obtain Expiration time in seconds. Default value: 3600
 * @method void setExpireTime(integer $ExpireTime) Set Expiration time in seconds. Default value: 3600
 * @method string getAddStrategy() Obtain IP adding policy. Valid value: fifo (if a blocklist is full, new IPs added to the blocklist will adopt the first-in first-out policy)
 * @method void setAddStrategy(string $AddStrategy) Set IP adding policy. Valid value: fifo (if a blocklist is full, new IPs added to the blocklist will adopt the first-in first-out policy)
 */
class ModifyBlockIPListRequest extends AbstractModel
{
    /**
     * @var array CLB instance ID
     */
    public $LoadBalancerIds;

    /**
     * @var string Operation type. Valid values:
<li> add_customized_field (sets header initially to enable the blocklist feature)</li>
<li> set_customized_field (modifies header)</li>
<li> del_customized_field (deletes header)</li>
<li> add_blocked (adds IPs to blocklist)</li>
<li> del_blocked (deletes IPs from blocklist)</li>
<li> flush_blocked (clears blocklist)</li>
     */
    public $Type;

    /**
     * @var string Header field that stores real client IPs
     */
    public $ClientIPField;

    /**
     * @var array List of blocked IPs. The array can contain up to 200,000 entries in one operation.
     */
    public $BlockIPList;

    /**
     * @var integer Expiration time in seconds. Default value: 3600
     */
    public $ExpireTime;

    /**
     * @var string IP adding policy. Valid value: fifo (if a blocklist is full, new IPs added to the blocklist will adopt the first-in first-out policy)
     */
    public $AddStrategy;

    /**
     * @param array $LoadBalancerIds CLB instance ID
     * @param string $Type Operation type. Valid values:
<li> add_customized_field (sets header initially to enable the blocklist feature)</li>
<li> set_customized_field (modifies header)</li>
<li> del_customized_field (deletes header)</li>
<li> add_blocked (adds IPs to blocklist)</li>
<li> del_blocked (deletes IPs from blocklist)</li>
<li> flush_blocked (clears blocklist)</li>
     * @param string $ClientIPField Header field that stores real client IPs
     * @param array $BlockIPList List of blocked IPs. The array can contain up to 200,000 entries in one operation.
     * @param integer $ExpireTime Expiration time in seconds. Default value: 3600
     * @param string $AddStrategy IP adding policy. Valid value: fifo (if a blocklist is full, new IPs added to the blocklist will adopt the first-in first-out policy)
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
        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ClientIPField",$param) and $param["ClientIPField"] !== null) {
            $this->ClientIPField = $param["ClientIPField"];
        }

        if (array_key_exists("BlockIPList",$param) and $param["BlockIPList"] !== null) {
            $this->BlockIPList = $param["BlockIPList"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AddStrategy",$param) and $param["AddStrategy"] !== null) {
            $this->AddStrategy = $param["AddStrategy"];
        }
    }
}
