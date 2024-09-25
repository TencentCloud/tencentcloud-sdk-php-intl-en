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
 * Information on domain names protected by CLB WAF
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getDomainId() Obtain Unique domain name ID
 * @method void setDomainId(string $DomainId) Set Unique domain name ID
 * @method string getMainDomain() Obtain Primary Domain, empty upon input
 * @method void setMainDomain(string $MainDomain) Set Primary Domain, empty upon input
 * @method integer getMode() Obtain Rule engine protection mode
0: observation mode
1: interception mode
 * @method void setMode(integer $Mode) Set Rule engine protection mode
0: observation mode
1: interception mode
 * @method integer getStatus() Obtain Binding relationship between WAF and CLB
0: unbound
1: bound
 * @method void setStatus(integer $Status) Set Binding relationship between WAF and CLB
0: unbound
1: bound
 * @method integer getState() Obtain Domain name listener status of CLB WAF
0: operation successful
4: CLB instance binding in progress
6: CLB instance unbinding in progress
7: CLB instance unbinding failed
8: CLB instance binding failed
10: internal error
 * @method void setState(integer $State) Set Domain name listener status of CLB WAF
0: operation successful
4: CLB instance binding in progress
6: CLB instance unbinding in progress
7: CLB instance unbinding failed
8: CLB instance binding failed
10: internal error
 * @method integer getEngine() Obtain Status of the rule engine and AI engine
1: initial status. Interception for the rule engine and disabled for the AI engine.
10: observation for the rule engine and disabled for the AI engine
11: observation for both the rule engine and AI engine
12: observation for the rule engine and interception for the AI engine
20: interception for the rule engine and disabled for the AI engine
21: interception for the rule engine and observation for the AI engine
22: interception for both the rule engine and AI engine
 * @method void setEngine(integer $Engine) Set Status of the rule engine and AI engine
1: initial status. Interception for the rule engine and disabled for the AI engine.
10: observation for the rule engine and disabled for the AI engine
11: observation for both the rule engine and AI engine
12: observation for the rule engine and interception for the AI engine
20: interception for the rule engine and disabled for the AI engine
21: interception for the rule engine and observation for the AI engine
22: interception for both the rule engine and AI engine
 * @method integer getIsCdn() Obtain Whether a layer-7 proxy service is deployed before WAF. 0: No proxy service deployed; 1: Proxy service deployed, and WAF will use XFF to obtain the client IP address; 2: Proxy service deployed, and WAF will use remote_addr to obtain the client IP address; 3: Proxy service deployed, and WAF will use the custom header in ip_headers to obtain the client IP address.
 * @method void setIsCdn(integer $IsCdn) Set Whether a layer-7 proxy service is deployed before WAF. 0: No proxy service deployed; 1: Proxy service deployed, and WAF will use XFF to obtain the client IP address; 2: Proxy service deployed, and WAF will use remote_addr to obtain the client IP address; 3: Proxy service deployed, and WAF will use the custom header in ip_headers to obtain the client IP address.
 * @method array getLoadBalancerSet() Obtain List of the information on the bound CLB instance
 * @method void setLoadBalancerSet(array $LoadBalancerSet) Set List of the information on the bound CLB instance
 * @method string getRegion() Obtain Region of the CLB instance bound to the domain name. Separate multiple regions by commas.
 * @method void setRegion(string $Region) Set Region of the CLB instance bound to the domain name. Separate multiple regions by commas.
 * @method string getEdition() Obtain Instance type of the domain name. For CLB WAF, the value is "clb-waf".
 * @method void setEdition(string $Edition) Set Instance type of the domain name. For CLB WAF, the value is "clb-waf".
 * @method integer getFlowMode() Obtain Traffic mode of domain names protected by CLB WAF
1: cleaning mode
0: mirror mode
 * @method void setFlowMode(integer $FlowMode) Set Traffic mode of domain names protected by CLB WAF
1: cleaning mode
0: mirror mode
 * @method integer getClsStatus() Obtain Whether to enable access logging
1: enable
0: disable
 * @method void setClsStatus(integer $ClsStatus) Set Whether to enable access logging
1: enable
0: disable
 * @method integer getLevel() Obtain Protection Level, Optional Values: 100, 200, 300

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLevel(integer $Level) Set Protection Level, Optional Values: 100, 200, 300

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCdcClusters() Obtain List of CDC clusters to which the domain name needs to be delivered. Specify this parameter for CDC scenes only.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCdcClusters(array $CdcClusters) Set List of CDC clusters to which the domain name needs to be delivered. Specify this parameter for CDC scenes only.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAlbType() Obtain Application CLB type. Default value: clb. 
clb: layer-7 CLB
tsegw: Tencent Cloud API Gateway
scf: Tencent Cloud Serverless
apisix: Other Tencent Cloud Gateway. eg: APISIX gateway
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlbType(string $AlbType) Set Application CLB type. Default value: clb. 
clb: layer-7 CLB
tsegw: Tencent Cloud API Gateway
scf: Tencent Cloud Serverless
apisix: Other Tencent Cloud Gateway. eg: APISIX gateway
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getIpHeaders() Obtain IsCdn=3 required for this parameter, indicates custom header

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpHeaders(array $IpHeaders) Set IsCdn=3 required for this parameter, indicates custom header

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEngineType() Obtain Rule engine type
1: menshen
2: tiga
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEngineType(integer $EngineType) Set Rule engine type
1: menshen
2: tiga
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCloudType() Obtain Cloud type
public: public cloud
private: private cloud
hybrid: hybrid cloud
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloudType(string $CloudType) Set Cloud type
public: public cloud
private: private cloud
hybrid: hybrid cloud
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNote() Obtain Domain name remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNote(string $Note) Set Domain name remarks
Note: This field may return null, indicating that no valid values can be obtained.
 */
class HostRecord extends AbstractModel
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
     * @var string Primary Domain, empty upon input
     */
    public $MainDomain;

    /**
     * @var integer Rule engine protection mode
0: observation mode
1: interception mode
     */
    public $Mode;

    /**
     * @var integer Binding relationship between WAF and CLB
0: unbound
1: bound
     */
    public $Status;

    /**
     * @var integer Domain name listener status of CLB WAF
0: operation successful
4: CLB instance binding in progress
6: CLB instance unbinding in progress
7: CLB instance unbinding failed
8: CLB instance binding failed
10: internal error
     */
    public $State;

    /**
     * @var integer Status of the rule engine and AI engine
1: initial status. Interception for the rule engine and disabled for the AI engine.
10: observation for the rule engine and disabled for the AI engine
11: observation for both the rule engine and AI engine
12: observation for the rule engine and interception for the AI engine
20: interception for the rule engine and disabled for the AI engine
21: interception for the rule engine and observation for the AI engine
22: interception for both the rule engine and AI engine
     */
    public $Engine;

    /**
     * @var integer Whether a layer-7 proxy service is deployed before WAF. 0: No proxy service deployed; 1: Proxy service deployed, and WAF will use XFF to obtain the client IP address; 2: Proxy service deployed, and WAF will use remote_addr to obtain the client IP address; 3: Proxy service deployed, and WAF will use the custom header in ip_headers to obtain the client IP address.
     */
    public $IsCdn;

    /**
     * @var array List of the information on the bound CLB instance
     */
    public $LoadBalancerSet;

    /**
     * @var string Region of the CLB instance bound to the domain name. Separate multiple regions by commas.
     */
    public $Region;

    /**
     * @var string Instance type of the domain name. For CLB WAF, the value is "clb-waf".
     */
    public $Edition;

    /**
     * @var integer Traffic mode of domain names protected by CLB WAF
1: cleaning mode
0: mirror mode
     */
    public $FlowMode;

    /**
     * @var integer Whether to enable access logging
1: enable
0: disable
     */
    public $ClsStatus;

    /**
     * @var integer Protection Level, Optional Values: 100, 200, 300

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Level;

    /**
     * @var array List of CDC clusters to which the domain name needs to be delivered. Specify this parameter for CDC scenes only.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CdcClusters;

    /**
     * @var string Application CLB type. Default value: clb. 
clb: layer-7 CLB
tsegw: Tencent Cloud API Gateway
scf: Tencent Cloud Serverless
apisix: Other Tencent Cloud Gateway. eg: APISIX gateway
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlbType;

    /**
     * @var array IsCdn=3 required for this parameter, indicates custom header

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IpHeaders;

    /**
     * @var integer Rule engine type
1: menshen
2: tiga
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EngineType;

    /**
     * @var string Cloud type
public: public cloud
private: private cloud
hybrid: hybrid cloud
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloudType;

    /**
     * @var string Domain name remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Note;

    /**
     * @param string $Domain Domain name
     * @param string $DomainId Unique domain name ID
     * @param string $MainDomain Primary Domain, empty upon input
     * @param integer $Mode Rule engine protection mode
0: observation mode
1: interception mode
     * @param integer $Status Binding relationship between WAF and CLB
0: unbound
1: bound
     * @param integer $State Domain name listener status of CLB WAF
0: operation successful
4: CLB instance binding in progress
6: CLB instance unbinding in progress
7: CLB instance unbinding failed
8: CLB instance binding failed
10: internal error
     * @param integer $Engine Status of the rule engine and AI engine
1: initial status. Interception for the rule engine and disabled for the AI engine.
10: observation for the rule engine and disabled for the AI engine
11: observation for both the rule engine and AI engine
12: observation for the rule engine and interception for the AI engine
20: interception for the rule engine and disabled for the AI engine
21: interception for the rule engine and observation for the AI engine
22: interception for both the rule engine and AI engine
     * @param integer $IsCdn Whether a layer-7 proxy service is deployed before WAF. 0: No proxy service deployed; 1: Proxy service deployed, and WAF will use XFF to obtain the client IP address; 2: Proxy service deployed, and WAF will use remote_addr to obtain the client IP address; 3: Proxy service deployed, and WAF will use the custom header in ip_headers to obtain the client IP address.
     * @param array $LoadBalancerSet List of the information on the bound CLB instance
     * @param string $Region Region of the CLB instance bound to the domain name. Separate multiple regions by commas.
     * @param string $Edition Instance type of the domain name. For CLB WAF, the value is "clb-waf".
     * @param integer $FlowMode Traffic mode of domain names protected by CLB WAF
1: cleaning mode
0: mirror mode
     * @param integer $ClsStatus Whether to enable access logging
1: enable
0: disable
     * @param integer $Level Protection Level, Optional Values: 100, 200, 300

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CdcClusters List of CDC clusters to which the domain name needs to be delivered. Specify this parameter for CDC scenes only.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AlbType Application CLB type. Default value: clb. 
clb: layer-7 CLB
tsegw: Tencent Cloud API Gateway
scf: Tencent Cloud Serverless
apisix: Other Tencent Cloud Gateway. eg: APISIX gateway
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $IpHeaders IsCdn=3 required for this parameter, indicates custom header

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EngineType Rule engine type
1: menshen
2: tiga
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CloudType Cloud type
public: public cloud
private: private cloud
hybrid: hybrid cloud
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Note Domain name remarks
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

        if (array_key_exists("MainDomain",$param) and $param["MainDomain"] !== null) {
            $this->MainDomain = $param["MainDomain"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("IsCdn",$param) and $param["IsCdn"] !== null) {
            $this->IsCdn = $param["IsCdn"];
        }

        if (array_key_exists("LoadBalancerSet",$param) and $param["LoadBalancerSet"] !== null) {
            $this->LoadBalancerSet = [];
            foreach ($param["LoadBalancerSet"] as $key => $value){
                $obj = new LoadBalancer();
                $obj->deserialize($value);
                array_push($this->LoadBalancerSet, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("FlowMode",$param) and $param["FlowMode"] !== null) {
            $this->FlowMode = $param["FlowMode"];
        }

        if (array_key_exists("ClsStatus",$param) and $param["ClsStatus"] !== null) {
            $this->ClsStatus = $param["ClsStatus"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("CdcClusters",$param) and $param["CdcClusters"] !== null) {
            $this->CdcClusters = $param["CdcClusters"];
        }

        if (array_key_exists("AlbType",$param) and $param["AlbType"] !== null) {
            $this->AlbType = $param["AlbType"];
        }

        if (array_key_exists("IpHeaders",$param) and $param["IpHeaders"] !== null) {
            $this->IpHeaders = $param["IpHeaders"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }
    }
}
