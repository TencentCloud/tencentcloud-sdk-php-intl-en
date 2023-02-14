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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of a BCOS network.
 *
 * @method integer getChainId() Obtain The network ID.
 * @method void setChainId(integer $ChainId) Set The network ID.
 * @method string getChainName() Obtain The network name.
 * @method void setChainName(string $ChainName) Set The network name.
 * @method integer getAgencyCount() Obtain The number of organizations.
 * @method void setAgencyCount(integer $AgencyCount) Set The number of organizations.
 * @method integer getConsortiumId() Obtain The consortium ID.
 * @method void setConsortiumId(integer $ConsortiumId) Set The consortium ID.
 * @method string getCreateTime() Obtain The creation time.
 * @method void setCreateTime(string $CreateTime) Set The creation time.
 * @method string getExpireTime() Obtain The expiration time.
 * @method void setExpireTime(string $ExpireTime) Set The expiration time.
 * @method integer getChainStatus() Obtain The network status.
 * @method void setChainStatus(integer $ChainStatus) Set The network status.
 * @method string getResourceId() Obtain The resource ID.
 * @method void setResourceId(string $ResourceId) Set The resource ID.
 * @method string getClusterId() Obtain The cluster ID.
 * @method void setClusterId(string $ClusterId) Set The cluster ID.
 * @method string getConsortiumName() Obtain The consortium name.
 * @method void setConsortiumName(string $ConsortiumName) Set The consortium name.
 * @method integer getAgencyId() Obtain The organization ID.
 * @method void setAgencyId(integer $AgencyId) Set The organization ID.
 * @method integer getAutoRenewFlag() Obtain The renewal status.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set The renewal status.
 * @method integer getTotalNetworkNode() Obtain The network mode.
 * @method void setTotalNetworkNode(integer $TotalNetworkNode) Set The network mode.
 * @method integer getTotalCreateNode() Obtain The number of nodes created.
 * @method void setTotalCreateNode(integer $TotalCreateNode) Set The number of nodes created.
 * @method integer getTotalGroups() Obtain The total number of groups.
 * @method void setTotalGroups(integer $TotalGroups) Set The total number of groups.
 */
class BcosClusterItem extends AbstractModel
{
    /**
     * @var integer The network ID.
     */
    public $ChainId;

    /**
     * @var string The network name.
     */
    public $ChainName;

    /**
     * @var integer The number of organizations.
     */
    public $AgencyCount;

    /**
     * @var integer The consortium ID.
     */
    public $ConsortiumId;

    /**
     * @var string The creation time.
     */
    public $CreateTime;

    /**
     * @var string The expiration time.
     */
    public $ExpireTime;

    /**
     * @var integer The network status.
     */
    public $ChainStatus;

    /**
     * @var string The resource ID.
     */
    public $ResourceId;

    /**
     * @var string The cluster ID.
     */
    public $ClusterId;

    /**
     * @var string The consortium name.
     */
    public $ConsortiumName;

    /**
     * @var integer The organization ID.
     */
    public $AgencyId;

    /**
     * @var integer The renewal status.
     */
    public $AutoRenewFlag;

    /**
     * @var integer The network mode.
     */
    public $TotalNetworkNode;

    /**
     * @var integer The number of nodes created.
     */
    public $TotalCreateNode;

    /**
     * @var integer The total number of groups.
     */
    public $TotalGroups;

    /**
     * @param integer $ChainId The network ID.
     * @param string $ChainName The network name.
     * @param integer $AgencyCount The number of organizations.
     * @param integer $ConsortiumId The consortium ID.
     * @param string $CreateTime The creation time.
     * @param string $ExpireTime The expiration time.
     * @param integer $ChainStatus The network status.
     * @param string $ResourceId The resource ID.
     * @param string $ClusterId The cluster ID.
     * @param string $ConsortiumName The consortium name.
     * @param integer $AgencyId The organization ID.
     * @param integer $AutoRenewFlag The renewal status.
     * @param integer $TotalNetworkNode The network mode.
     * @param integer $TotalCreateNode The number of nodes created.
     * @param integer $TotalGroups The total number of groups.
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
        if (array_key_exists("ChainId",$param) and $param["ChainId"] !== null) {
            $this->ChainId = $param["ChainId"];
        }

        if (array_key_exists("ChainName",$param) and $param["ChainName"] !== null) {
            $this->ChainName = $param["ChainName"];
        }

        if (array_key_exists("AgencyCount",$param) and $param["AgencyCount"] !== null) {
            $this->AgencyCount = $param["AgencyCount"];
        }

        if (array_key_exists("ConsortiumId",$param) and $param["ConsortiumId"] !== null) {
            $this->ConsortiumId = $param["ConsortiumId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ChainStatus",$param) and $param["ChainStatus"] !== null) {
            $this->ChainStatus = $param["ChainStatus"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ConsortiumName",$param) and $param["ConsortiumName"] !== null) {
            $this->ConsortiumName = $param["ConsortiumName"];
        }

        if (array_key_exists("AgencyId",$param) and $param["AgencyId"] !== null) {
            $this->AgencyId = $param["AgencyId"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("TotalNetworkNode",$param) and $param["TotalNetworkNode"] !== null) {
            $this->TotalNetworkNode = $param["TotalNetworkNode"];
        }

        if (array_key_exists("TotalCreateNode",$param) and $param["TotalCreateNode"] !== null) {
            $this->TotalCreateNode = $param["TotalCreateNode"];
        }

        if (array_key_exists("TotalGroups",$param) and $param["TotalGroups"] !== null) {
            $this->TotalGroups = $param["TotalGroups"];
        }
    }
}
