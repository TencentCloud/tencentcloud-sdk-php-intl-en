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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of proxy group
 *
 * @method string getProxyGroupId() Obtain Proxy group ID
 * @method void setProxyGroupId(string $ProxyGroupId) Set Proxy group ID
 * @method string getProxyVersion() Obtain Proxy version Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProxyVersion(string $ProxyVersion) Set Proxy version Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSupportUpgradeProxyVersion() Obtain Supported proxy upgrade version Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupportUpgradeProxyVersion(string $SupportUpgradeProxyVersion) Set Supported proxy upgrade version Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Proxy status Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Proxy status Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskStatus() Obtain Proxy task status Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskStatus(string $TaskStatus) Set Proxy task status Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getProxyNode() Obtain Node information of the proxy group Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProxyNode(array $ProxyNode) Set Node information of the proxy group Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getProxyAddress() Obtain Address information of the proxy group Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProxyAddress(array $ProxyAddress) Set Address information of the proxy group Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getConnectionPoolLimit() Obtain Connection pool threshold Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConnectionPoolLimit(integer $ConnectionPoolLimit) Set Connection pool threshold Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getSupportCreateProxyAddress() Obtain Whether to support address creation Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupportCreateProxyAddress(boolean $SupportCreateProxyAddress) Set Whether to support address creation Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSupportUpgradeProxyMysqlVersion() Obtain TencentDB versions supporting proxy versions upgrade Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSupportUpgradeProxyMysqlVersion(string $SupportUpgradeProxyMysqlVersion) Set TencentDB versions supporting proxy versions upgrade Note: This field may return null, indicating that no valid values can be obtained.
 */
class ProxyGroupInfo extends AbstractModel
{
    /**
     * @var string Proxy group ID
     */
    public $ProxyGroupId;

    /**
     * @var string Proxy version Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProxyVersion;

    /**
     * @var string Supported proxy upgrade version Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SupportUpgradeProxyVersion;

    /**
     * @var string Proxy status Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Proxy task status Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskStatus;

    /**
     * @var array Node information of the proxy group Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProxyNode;

    /**
     * @var array Address information of the proxy group Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProxyAddress;

    /**
     * @var integer Connection pool threshold Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConnectionPoolLimit;

    /**
     * @var boolean Whether to support address creation Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SupportCreateProxyAddress;

    /**
     * @var string TencentDB versions supporting proxy versions upgrade Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SupportUpgradeProxyMysqlVersion;

    /**
     * @param string $ProxyGroupId Proxy group ID
     * @param string $ProxyVersion Proxy version Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SupportUpgradeProxyVersion Supported proxy upgrade version Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Proxy status Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskStatus Proxy task status Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ProxyNode Node information of the proxy group Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ProxyAddress Address information of the proxy group Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ConnectionPoolLimit Connection pool threshold Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $SupportCreateProxyAddress Whether to support address creation Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SupportUpgradeProxyMysqlVersion TencentDB versions supporting proxy versions upgrade Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("ProxyVersion",$param) and $param["ProxyVersion"] !== null) {
            $this->ProxyVersion = $param["ProxyVersion"];
        }

        if (array_key_exists("SupportUpgradeProxyVersion",$param) and $param["SupportUpgradeProxyVersion"] !== null) {
            $this->SupportUpgradeProxyVersion = $param["SupportUpgradeProxyVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("ProxyNode",$param) and $param["ProxyNode"] !== null) {
            $this->ProxyNode = [];
            foreach ($param["ProxyNode"] as $key => $value){
                $obj = new ProxyNode();
                $obj->deserialize($value);
                array_push($this->ProxyNode, $obj);
            }
        }

        if (array_key_exists("ProxyAddress",$param) and $param["ProxyAddress"] !== null) {
            $this->ProxyAddress = [];
            foreach ($param["ProxyAddress"] as $key => $value){
                $obj = new ProxyAddress();
                $obj->deserialize($value);
                array_push($this->ProxyAddress, $obj);
            }
        }

        if (array_key_exists("ConnectionPoolLimit",$param) and $param["ConnectionPoolLimit"] !== null) {
            $this->ConnectionPoolLimit = $param["ConnectionPoolLimit"];
        }

        if (array_key_exists("SupportCreateProxyAddress",$param) and $param["SupportCreateProxyAddress"] !== null) {
            $this->SupportCreateProxyAddress = $param["SupportCreateProxyAddress"];
        }

        if (array_key_exists("SupportUpgradeProxyMysqlVersion",$param) and $param["SupportUpgradeProxyMysqlVersion"] !== null) {
            $this->SupportUpgradeProxyMysqlVersion = $param["SupportUpgradeProxyMysqlVersion"];
        }
    }
}
