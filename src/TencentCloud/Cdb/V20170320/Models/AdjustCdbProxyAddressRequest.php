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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AdjustCdbProxyAddress request structure.
 *
 * @method string getProxyGroupId() Obtain <p>Proxy group ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1">DescribeCdbProxyInfo</a> API.</p>
 * @method void setProxyGroupId(string $ProxyGroupId) Set <p>Proxy group ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1">DescribeCdbProxyInfo</a> API.</p>
 * @method string getWeightMode() Obtain <p>Weight allocation mode,<br>system Auto-Assignment: "system", custom: "custom"</p>
 * @method void setWeightMode(string $WeightMode) Set <p>Weight allocation mode,<br>system Auto-Assignment: "system", custom: "custom"</p>
 * @method boolean getIsKickOut() Obtain <p>Whether delay removal is enabled. Value: "true" | "false"</p>
 * @method void setIsKickOut(boolean $IsKickOut) Set <p>Whether delay removal is enabled. Value: "true" | "false"</p>
 * @method integer getMinCount() Obtain <p>Minimum retention quantity, minimum value: 0.<br>Description: Valid only when IsKickOut is true.</p>
 * @method void setMinCount(integer $MinCount) Set <p>Minimum retention quantity, minimum value: 0.<br>Description: Valid only when IsKickOut is true.</p>
 * @method integer getMaxDelay() Obtain <p>Delay removal threshold, minimum value: 1, value ranges from 1 to 10000, integer.</p>
 * @method void setMaxDelay(integer $MaxDelay) Set <p>Delay removal threshold, minimum value: 1, value ranges from 1 to 10000, integer.</p>
 * @method boolean getFailOver() Obtain <p>Whether fault migration is enabled, value: "true" | "false"</p>
 * @method void setFailOver(boolean $FailOver) Set <p>Whether fault migration is enabled, value: "true" | "false"</p>
 * @method boolean getAutoAddRo() Obtain <p>Automatically add RO. Parameter: "true" | "false"</p>
 * @method void setAutoAddRo(boolean $AutoAddRo) Set <p>Automatically add RO. Parameter: "true" | "false"</p>
 * @method boolean getReadOnly() Obtain <p>Whether it is read-only. Value: "true" | "false".</p>
 * @method void setReadOnly(boolean $ReadOnly) Set <p>Whether it is read-only. Value: "true" | "false".</p>
 * @method string getProxyAddressId() Obtain <p>Proxy group address ID. Obtain through the <a href="https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1">DescribeCdbProxyInfo</a> API.</p>
 * @method void setProxyAddressId(string $ProxyAddressId) Set <p>Proxy group address ID. Obtain through the <a href="https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1">DescribeCdbProxyInfo</a> API.</p>
 * @method boolean getTransSplit() Obtain <p>Whether transaction splitting is enabled. Value: "true" | "false". Default value: false.</p>
 * @method void setTransSplit(boolean $TransSplit) Set <p>Whether transaction splitting is enabled. Value: "true" | "false". Default value: false.</p>
 * @method boolean getConnectionPool() Obtain <p>Whether the connection pool is enabled. Off by default.<br>Note: If you need to use the database proxy connection pool capability, the kernel minor version of the MySQL 8.0 primary instance must be at least MySQL 8.0 20230630.</p>
 * @method void setConnectionPool(boolean $ConnectionPool) Set <p>Whether the connection pool is enabled. Off by default.<br>Note: If you need to use the database proxy connection pool capability, the kernel minor version of the MySQL 8.0 primary instance must be at least MySQL 8.0 20230630.</p>
 * @method array getProxyAllocation() Obtain <p>Read-write weight allocation. If WeightMode is passed in as system, the passed-in weight does not take effect and the default weight is assigned by the system.</p>
 * @method void setProxyAllocation(array $ProxyAllocation) Set <p>Read-write weight allocation. If WeightMode is passed in as system, the passed-in weight does not take effect and the default weight is assigned by the system.</p>
 * @method boolean getAutoLoadBalance() Obtain <p>Whether self-adaptive load balancing is enabled. Off by default.</p>
 * @method void setAutoLoadBalance(boolean $AutoLoadBalance) Set <p>Whether self-adaptive load balancing is enabled. Off by default.</p>
 * @method string getAccessMode() Obtain <p>Access mode: nearby - proximity access, balance - balanced allocation. Default is proximity access.</p>
 * @method void setAccessMode(string $AccessMode) Set <p>Access mode: nearby - proximity access, balance - balanced allocation. Default is proximity access.</p>
 * @method boolean getApNodeAsRoNode() Obtain <p>Whether to treat the libra node as an ordinary RO node</p>
 * @method void setApNodeAsRoNode(boolean $ApNodeAsRoNode) Set <p>Whether to treat the libra node as an ordinary RO node</p>
 * @method boolean getApQueryToOtherNode() Obtain <p>Whether to forward to other nodes in case of a libra node fault</p>
 * @method void setApQueryToOtherNode(boolean $ApQueryToOtherNode) Set <p>Whether to forward to other nodes in case of a libra node fault</p>
 */
class AdjustCdbProxyAddressRequest extends AbstractModel
{
    /**
     * @var string <p>Proxy group ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1">DescribeCdbProxyInfo</a> API.</p>
     */
    public $ProxyGroupId;

    /**
     * @var string <p>Weight allocation mode,<br>system Auto-Assignment: "system", custom: "custom"</p>
     */
    public $WeightMode;

    /**
     * @var boolean <p>Whether delay removal is enabled. Value: "true" | "false"</p>
     */
    public $IsKickOut;

    /**
     * @var integer <p>Minimum retention quantity, minimum value: 0.<br>Description: Valid only when IsKickOut is true.</p>
     */
    public $MinCount;

    /**
     * @var integer <p>Delay removal threshold, minimum value: 1, value ranges from 1 to 10000, integer.</p>
     */
    public $MaxDelay;

    /**
     * @var boolean <p>Whether fault migration is enabled, value: "true" | "false"</p>
     */
    public $FailOver;

    /**
     * @var boolean <p>Automatically add RO. Parameter: "true" | "false"</p>
     */
    public $AutoAddRo;

    /**
     * @var boolean <p>Whether it is read-only. Value: "true" | "false".</p>
     */
    public $ReadOnly;

    /**
     * @var string <p>Proxy group address ID. Obtain through the <a href="https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1">DescribeCdbProxyInfo</a> API.</p>
     */
    public $ProxyAddressId;

    /**
     * @var boolean <p>Whether transaction splitting is enabled. Value: "true" | "false". Default value: false.</p>
     */
    public $TransSplit;

    /**
     * @var boolean <p>Whether the connection pool is enabled. Off by default.<br>Note: If you need to use the database proxy connection pool capability, the kernel minor version of the MySQL 8.0 primary instance must be at least MySQL 8.0 20230630.</p>
     */
    public $ConnectionPool;

    /**
     * @var array <p>Read-write weight allocation. If WeightMode is passed in as system, the passed-in weight does not take effect and the default weight is assigned by the system.</p>
     */
    public $ProxyAllocation;

    /**
     * @var boolean <p>Whether self-adaptive load balancing is enabled. Off by default.</p>
     */
    public $AutoLoadBalance;

    /**
     * @var string <p>Access mode: nearby - proximity access, balance - balanced allocation. Default is proximity access.</p>
     */
    public $AccessMode;

    /**
     * @var boolean <p>Whether to treat the libra node as an ordinary RO node</p>
     */
    public $ApNodeAsRoNode;

    /**
     * @var boolean <p>Whether to forward to other nodes in case of a libra node fault</p>
     */
    public $ApQueryToOtherNode;

    /**
     * @param string $ProxyGroupId <p>Proxy group ID, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1">DescribeCdbProxyInfo</a> API.</p>
     * @param string $WeightMode <p>Weight allocation mode,<br>system Auto-Assignment: "system", custom: "custom"</p>
     * @param boolean $IsKickOut <p>Whether delay removal is enabled. Value: "true" | "false"</p>
     * @param integer $MinCount <p>Minimum retention quantity, minimum value: 0.<br>Description: Valid only when IsKickOut is true.</p>
     * @param integer $MaxDelay <p>Delay removal threshold, minimum value: 1, value ranges from 1 to 10000, integer.</p>
     * @param boolean $FailOver <p>Whether fault migration is enabled, value: "true" | "false"</p>
     * @param boolean $AutoAddRo <p>Automatically add RO. Parameter: "true" | "false"</p>
     * @param boolean $ReadOnly <p>Whether it is read-only. Value: "true" | "false".</p>
     * @param string $ProxyAddressId <p>Proxy group address ID. Obtain through the <a href="https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1">DescribeCdbProxyInfo</a> API.</p>
     * @param boolean $TransSplit <p>Whether transaction splitting is enabled. Value: "true" | "false". Default value: false.</p>
     * @param boolean $ConnectionPool <p>Whether the connection pool is enabled. Off by default.<br>Note: If you need to use the database proxy connection pool capability, the kernel minor version of the MySQL 8.0 primary instance must be at least MySQL 8.0 20230630.</p>
     * @param array $ProxyAllocation <p>Read-write weight allocation. If WeightMode is passed in as system, the passed-in weight does not take effect and the default weight is assigned by the system.</p>
     * @param boolean $AutoLoadBalance <p>Whether self-adaptive load balancing is enabled. Off by default.</p>
     * @param string $AccessMode <p>Access mode: nearby - proximity access, balance - balanced allocation. Default is proximity access.</p>
     * @param boolean $ApNodeAsRoNode <p>Whether to treat the libra node as an ordinary RO node</p>
     * @param boolean $ApQueryToOtherNode <p>Whether to forward to other nodes in case of a libra node fault</p>
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
        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("IsKickOut",$param) and $param["IsKickOut"] !== null) {
            $this->IsKickOut = $param["IsKickOut"];
        }

        if (array_key_exists("MinCount",$param) and $param["MinCount"] !== null) {
            $this->MinCount = $param["MinCount"];
        }

        if (array_key_exists("MaxDelay",$param) and $param["MaxDelay"] !== null) {
            $this->MaxDelay = $param["MaxDelay"];
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("AutoAddRo",$param) and $param["AutoAddRo"] !== null) {
            $this->AutoAddRo = $param["AutoAddRo"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("ProxyAddressId",$param) and $param["ProxyAddressId"] !== null) {
            $this->ProxyAddressId = $param["ProxyAddressId"];
        }

        if (array_key_exists("TransSplit",$param) and $param["TransSplit"] !== null) {
            $this->TransSplit = $param["TransSplit"];
        }

        if (array_key_exists("ConnectionPool",$param) and $param["ConnectionPool"] !== null) {
            $this->ConnectionPool = $param["ConnectionPool"];
        }

        if (array_key_exists("ProxyAllocation",$param) and $param["ProxyAllocation"] !== null) {
            $this->ProxyAllocation = [];
            foreach ($param["ProxyAllocation"] as $key => $value){
                $obj = new ProxyAllocation();
                $obj->deserialize($value);
                array_push($this->ProxyAllocation, $obj);
            }
        }

        if (array_key_exists("AutoLoadBalance",$param) and $param["AutoLoadBalance"] !== null) {
            $this->AutoLoadBalance = $param["AutoLoadBalance"];
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("ApNodeAsRoNode",$param) and $param["ApNodeAsRoNode"] !== null) {
            $this->ApNodeAsRoNode = $param["ApNodeAsRoNode"];
        }

        if (array_key_exists("ApQueryToOtherNode",$param) and $param["ApQueryToOtherNode"] !== null) {
            $this->ApQueryToOtherNode = $param["ApQueryToOtherNode"];
        }
    }
}
