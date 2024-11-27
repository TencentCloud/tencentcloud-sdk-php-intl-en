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
 * Details about the domain name protected by CLB WAF
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getDomainId() Obtain Unique domain name ID
 * @method void setDomainId(string $DomainId) Set Unique domain name ID
 * @method string getInstanceId() Obtain Instance ID of the domain name
 * @method void setInstanceId(string $InstanceId) Set Instance ID of the domain name
 * @method string getInstanceName() Obtain Name of the instance of the domain name
 * @method void setInstanceName(string $InstanceName) Set Name of the instance of the domain name
 * @method string getEdition() Obtain Instance type of the domain name
 * @method void setEdition(string $Edition) Set Instance type of the domain name
 * @method integer getIsCdn() Obtain Whether a layer-7 proxy service is deployed before the WAF. 0: No proxy service is deployed; 1: The proxy service is deployed. The WAF will use XFF to obtain the client IP address; 2: The proxy service is deployed. The WAF will use remote_addr to obtain the client IP address; 3: The proxy service is deployed. The WAF will use a custom header in ip_headers to obtain the client IP address.
 * @method void setIsCdn(integer $IsCdn) Set Whether a layer-7 proxy service is deployed before the WAF. 0: No proxy service is deployed; 1: The proxy service is deployed. The WAF will use XFF to obtain the client IP address; 2: The proxy service is deployed. The WAF will use remote_addr to obtain the client IP address; 3: The proxy service is deployed. The WAF will use a custom header in ip_headers to obtain the client IP address.
 * @method array getLoadBalancerSet() Obtain CLB information when the CLB type is clb
 * @method void setLoadBalancerSet(array $LoadBalancerSet) Set CLB information when the CLB type is clb
 * @method integer getFlowMode() Obtain CLB WAF traffic mode. 1: cleaning mode; 0: image mode
 * @method void setFlowMode(integer $FlowMode) Set CLB WAF traffic mode. 1: cleaning mode; 0: image mode
 * @method integer getState() Obtain Domain name-bound CLB status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setState(integer $State) Set Domain name-bound CLB status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAlbType() Obtain CLB Type, either CLB or Apisix

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlbType(string $AlbType) Set CLB Type, either CLB or Apisix

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getIpHeaders() Obtain IsCdn=3 indicates custom header

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpHeaders(array $IpHeaders) Set IsCdn=3 indicates custom header

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCdcClusters() Obtain CDC cluster information for the WAF of the cdc-clb-waf type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCdcClusters(string $CdcClusters) Set CDC cluster information for the WAF of the cdc-clb-waf type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCloudType() Obtain Cloud Type: public: Public Cloud; private: Private Cloud; hybrid: Hybrid Cloud

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloudType(string $CloudType) Set Cloud Type: public: Public Cloud; private: Private Cloud; hybrid: Hybrid Cloud

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNote() Obtain Domain name remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNote(string $Note) Set Domain name remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLabels() Obtain Domain name tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabels(array $Labels) Set Domain name tag.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ClbDomainsInfo extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Unique domain name ID
     */
    public $DomainId;

    /**
     * @var string Instance ID of the domain name
     */
    public $InstanceId;

    /**
     * @var string Name of the instance of the domain name
     */
    public $InstanceName;

    /**
     * @var string Instance type of the domain name
     */
    public $Edition;

    /**
     * @var integer Whether a layer-7 proxy service is deployed before the WAF. 0: No proxy service is deployed; 1: The proxy service is deployed. The WAF will use XFF to obtain the client IP address; 2: The proxy service is deployed. The WAF will use remote_addr to obtain the client IP address; 3: The proxy service is deployed. The WAF will use a custom header in ip_headers to obtain the client IP address.
     */
    public $IsCdn;

    /**
     * @var array CLB information when the CLB type is clb
     */
    public $LoadBalancerSet;

    /**
     * @var integer CLB WAF traffic mode. 1: cleaning mode; 0: image mode
     */
    public $FlowMode;

    /**
     * @var integer Domain name-bound CLB status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $State;

    /**
     * @var string CLB Type, either CLB or Apisix

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlbType;

    /**
     * @var array IsCdn=3 indicates custom header

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IpHeaders;

    /**
     * @var string CDC cluster information for the WAF of the cdc-clb-waf type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CdcClusters;

    /**
     * @var string Cloud Type: public: Public Cloud; private: Private Cloud; hybrid: Hybrid Cloud

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloudType;

    /**
     * @var string Domain name remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Note;

    /**
     * @var array Domain name tag.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Labels;

    /**
     * @param string $Domain Domain name
     * @param string $DomainId Unique domain name ID
     * @param string $InstanceId Instance ID of the domain name
     * @param string $InstanceName Name of the instance of the domain name
     * @param string $Edition Instance type of the domain name
     * @param integer $IsCdn Whether a layer-7 proxy service is deployed before the WAF. 0: No proxy service is deployed; 1: The proxy service is deployed. The WAF will use XFF to obtain the client IP address; 2: The proxy service is deployed. The WAF will use remote_addr to obtain the client IP address; 3: The proxy service is deployed. The WAF will use a custom header in ip_headers to obtain the client IP address.
     * @param array $LoadBalancerSet CLB information when the CLB type is clb
     * @param integer $FlowMode CLB WAF traffic mode. 1: cleaning mode; 0: image mode
     * @param integer $State Domain name-bound CLB status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AlbType CLB Type, either CLB or Apisix

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $IpHeaders IsCdn=3 indicates custom header

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CdcClusters CDC cluster information for the WAF of the cdc-clb-waf type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CloudType Cloud Type: public: Public Cloud; private: Private Cloud; hybrid: Hybrid Cloud

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Note Domain name remarks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Labels Domain name tag.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("IsCdn",$param) and $param["IsCdn"] !== null) {
            $this->IsCdn = $param["IsCdn"];
        }

        if (array_key_exists("LoadBalancerSet",$param) and $param["LoadBalancerSet"] !== null) {
            $this->LoadBalancerSet = [];
            foreach ($param["LoadBalancerSet"] as $key => $value){
                $obj = new LoadBalancerPackageNew();
                $obj->deserialize($value);
                array_push($this->LoadBalancerSet, $obj);
            }
        }

        if (array_key_exists("FlowMode",$param) and $param["FlowMode"] !== null) {
            $this->FlowMode = $param["FlowMode"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AlbType",$param) and $param["AlbType"] !== null) {
            $this->AlbType = $param["AlbType"];
        }

        if (array_key_exists("IpHeaders",$param) and $param["IpHeaders"] !== null) {
            $this->IpHeaders = $param["IpHeaders"];
        }

        if (array_key_exists("CdcClusters",$param) and $param["CdcClusters"] !== null) {
            $this->CdcClusters = $param["CdcClusters"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }
    }
}
