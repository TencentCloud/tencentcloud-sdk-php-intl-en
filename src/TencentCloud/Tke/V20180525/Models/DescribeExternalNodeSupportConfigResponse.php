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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExternalNodeSupportConfig response structure.
 *
 * @method string getClusterCIDR() Obtain CIDR used to assign container and service IPs for the cluster. It cannot conflict with the VPC's CIDR or the CIDRs of other clusters in the same VPC. The network segment must be within the private network segment, for example, 10.1.0.0/14, 192.168.0.1/18,172.16.0.0/16.

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setClusterCIDR(string $ClusterCIDR) Set CIDR used to assign container and service IPs for the cluster. It cannot conflict with the VPC's CIDR or the CIDRs of other clusters in the same VPC. The network segment must be within the private network segment, for example, 10.1.0.0/14, 192.168.0.1/18,172.16.0.0/16.

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getNetworkType() Obtain Cluster network plugin type, support: CiliumBGP, CiliumVXLan
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setNetworkType(string $NetworkType) Set Cluster network plugin type, support: CiliumBGP, CiliumVXLan
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getSubnetId() Obtain Subnet ID

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method boolean getEnabled() Obtain Whether to enable third-party node direct connect support
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setEnabled(boolean $Enabled) Set Whether to enable third-party node direct connect support
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getAS() Obtain BGP AS number of the switch to which the node belongs
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setAS(string $AS) Set BGP AS number of the switch to which the node belongs
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getSwitchIP() Obtain Switch IP of the switch to which the node belongs
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setSwitchIP(string $SwitchIP) Set Switch IP of the switch to which the node belongs
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getStatus() Obtain Enabling third-party node pool status
 * @method void setStatus(string $Status) Set Enabling third-party node pool status
 * @method string getFailedReason() Obtain Reason if enabling failed
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setFailedReason(string $FailedReason) Set Reason if enabling failed
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getMaster() Obtain Private Network Access Address
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setMaster(string $Master) Set Private Network Access Address
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getProxy() Obtain Image Repository Proxy Address
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setProxy(string $Proxy) Set Image Repository Proxy Address
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method array getProgress() Obtain Used to record which step the enabling of external nodes process is at
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setProgress(array $Progress) Set Used to record which step the enabling of external nodes process is at
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method boolean getEnabledPublicConnect() Obtain Whether to enable third-party node public network connection support
 * @method void setEnabledPublicConnect(boolean $EnabledPublicConnect) Set Whether to enable third-party node public network connection support
 * @method string getPublicConnectUrl() Obtain Public Network Connection Address of the registered node public network version
 * @method void setPublicConnectUrl(string $PublicConnectUrl) Set Public Network Connection Address of the registered node public network version
 * @method string getPublicCustomDomain() Obtain Custom Domain Name of the registered node public network version
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setPublicCustomDomain(string $PublicCustomDomain) Set Custom Domain Name of the registered node public network version
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeExternalNodeSupportConfigResponse extends AbstractModel
{
    /**
     * @var string CIDR used to assign container and service IPs for the cluster. It cannot conflict with the VPC's CIDR or the CIDRs of other clusters in the same VPC. The network segment must be within the private network segment, for example, 10.1.0.0/14, 192.168.0.1/18,172.16.0.0/16.

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $ClusterCIDR;

    /**
     * @var string Cluster network plugin type, support: CiliumBGP, CiliumVXLan
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $NetworkType;

    /**
     * @var string Subnet ID

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $SubnetId;

    /**
     * @var boolean Whether to enable third-party node direct connect support
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Enabled;

    /**
     * @var string BGP AS number of the switch to which the node belongs
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $AS;

    /**
     * @var string Switch IP of the switch to which the node belongs
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $SwitchIP;

    /**
     * @var string Enabling third-party node pool status
     */
    public $Status;

    /**
     * @var string Reason if enabling failed
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $FailedReason;

    /**
     * @var string Private Network Access Address
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Master;

    /**
     * @var string Image Repository Proxy Address
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Proxy;

    /**
     * @var array Used to record which step the enabling of external nodes process is at
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Progress;

    /**
     * @var boolean Whether to enable third-party node public network connection support
     */
    public $EnabledPublicConnect;

    /**
     * @var string Public Network Connection Address of the registered node public network version
     */
    public $PublicConnectUrl;

    /**
     * @var string Custom Domain Name of the registered node public network version
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $PublicCustomDomain;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ClusterCIDR CIDR used to assign container and service IPs for the cluster. It cannot conflict with the VPC's CIDR or the CIDRs of other clusters in the same VPC. The network segment must be within the private network segment, for example, 10.1.0.0/14, 192.168.0.1/18,172.16.0.0/16.

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $NetworkType Cluster network plugin type, support: CiliumBGP, CiliumVXLan
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $SubnetId Subnet ID

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param boolean $Enabled Whether to enable third-party node direct connect support
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $AS BGP AS number of the switch to which the node belongs
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $SwitchIP Switch IP of the switch to which the node belongs
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $Status Enabling third-party node pool status
     * @param string $FailedReason Reason if enabling failed
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $Master Private Network Access Address
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $Proxy Image Repository Proxy Address
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param array $Progress Used to record which step the enabling of external nodes process is at
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param boolean $EnabledPublicConnect Whether to enable third-party node public network connection support
     * @param string $PublicConnectUrl Public Network Connection Address of the registered node public network version
     * @param string $PublicCustomDomain Custom Domain Name of the registered node public network version
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("ClusterCIDR",$param) and $param["ClusterCIDR"] !== null) {
            $this->ClusterCIDR = $param["ClusterCIDR"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("AS",$param) and $param["AS"] !== null) {
            $this->AS = $param["AS"];
        }

        if (array_key_exists("SwitchIP",$param) and $param["SwitchIP"] !== null) {
            $this->SwitchIP = $param["SwitchIP"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailedReason",$param) and $param["FailedReason"] !== null) {
            $this->FailedReason = $param["FailedReason"];
        }

        if (array_key_exists("Master",$param) and $param["Master"] !== null) {
            $this->Master = $param["Master"];
        }

        if (array_key_exists("Proxy",$param) and $param["Proxy"] !== null) {
            $this->Proxy = $param["Proxy"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = [];
            foreach ($param["Progress"] as $key => $value){
                $obj = new Step();
                $obj->deserialize($value);
                array_push($this->Progress, $obj);
            }
        }

        if (array_key_exists("EnabledPublicConnect",$param) and $param["EnabledPublicConnect"] !== null) {
            $this->EnabledPublicConnect = $param["EnabledPublicConnect"];
        }

        if (array_key_exists("PublicConnectUrl",$param) and $param["PublicConnectUrl"] !== null) {
            $this->PublicConnectUrl = $param["PublicConnectUrl"];
        }

        if (array_key_exists("PublicCustomDomain",$param) and $param["PublicCustomDomain"] !== null) {
            $this->PublicCustomDomain = $param["PublicCustomDomain"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
