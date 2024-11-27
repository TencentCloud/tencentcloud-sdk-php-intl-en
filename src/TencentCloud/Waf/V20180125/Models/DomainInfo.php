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
 * Domain list
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getDomainId() Obtain Domain ID
 * @method void setDomainId(string $DomainId) Set Domain ID
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getCname() Obtain CNAME Address
 * @method void setCname(string $Cname) Set CNAME Address
 * @method string getEdition() Obtain Instance type of the domain name.
sparta-waf: SaaS WAF instance
clb-waf: CLB WAF instance
cdc-clb-waf: CLB WAF instances in the CDC environment
 * @method void setEdition(string $Edition) Set Instance type of the domain name.
sparta-waf: SaaS WAF instance
clb-waf: CLB WAF instance
cdc-clb-waf: CLB WAF instances in the CDC environment
 * @method string getRegion() Obtain Region
"Toronto": "ca"
"Guangzhou": "gz"
"Chengdu": "cd"
"Fuzhou": "fzec"
"Shenzhen": "szx"
"India": "in"
"Jinan": "jnec"
"Chongqing": "cq"
"Tianjin": "tsn"
"Northeast Europe": "ru"
"Nanjing": "nj"
"Silicon Valley, USA": "usw"
"Thailand": "th"
"Guangzhou Open": "gzopen"
"Shenzhen Finance": "szjr"
"Frankfurt": "de"
"Japan": "jp"
"Virginia": "use"
"Beijing": "bj"
"Hong Kong (China)": "hk"
"Hangzhou": "hzec"
"Beijing Finance": "bjjr"
"Shanghai Finance": "shjr"
"Taipei (China)": "tpe"
"Seoul": "kr"
"Shanghai": "sh"
"Singapore": "sg"
"Qingyuan": "qy"
 * @method void setRegion(string $Region) Set Region
"Toronto": "ca"
"Guangzhou": "gz"
"Chengdu": "cd"
"Fuzhou": "fzec"
"Shenzhen": "szx"
"India": "in"
"Jinan": "jnec"
"Chongqing": "cq"
"Tianjin": "tsn"
"Northeast Europe": "ru"
"Nanjing": "nj"
"Silicon Valley, USA": "usw"
"Thailand": "th"
"Guangzhou Open": "gzopen"
"Shenzhen Finance": "szjr"
"Frankfurt": "de"
"Japan": "jp"
"Virginia": "use"
"Beijing": "bj"
"Hong Kong (China)": "hk"
"Hangzhou": "hzec"
"Beijing Finance": "bjjr"
"Shanghai Finance": "shjr"
"Taipei (China)": "tpe"
"Seoul": "kr"
"Shanghai": "sh"
"Singapore": "sg"
"Qingyuan": "qy"
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method integer getClsStatus() Obtain Access log switch status
0: disabled
1: enabled
 * @method void setClsStatus(integer $ClsStatus) Set Access log switch status
0: disabled
1: enabled
 * @method integer getFlowMode() Obtain CLB WAF usage mode
0: image mode
1: cleaning mode
 * @method void setFlowMode(integer $FlowMode) Set CLB WAF usage mode
0: image mode
1: cleaning mode
 * @method integer getStatus() Obtain WAF switch status
0: disabled
1: enabled
 * @method void setStatus(integer $Status) Set WAF switch status
0: disabled
1: enabled
 * @method integer getMode() Obtain Rule engine protection mode
0: observation mode
1: interception mode
 * @method void setMode(integer $Mode) Set Rule engine protection mode
0: observation mode
1: interception mode
 * @method integer getEngine() Obtain Joint status of rule engine and AI engine protection modes.
1: initial status: interception for the rule engine and disabled for the AI engine
10: observation for the rule engine and disabled for the AI engine
11: observation for both the rule engine and AI engine
12: observation for the rule engine and interception for the AI engine
20: interception for the rule engine and disabled for the AI engine
21: interception for the rule engine and observation for the AI engine
22: interception for both the rule engine and AI engine
 * @method void setEngine(integer $Engine) Set Joint status of rule engine and AI engine protection modes.
1: initial status: interception for the rule engine and disabled for the AI engine
10: observation for the rule engine and disabled for the AI engine
11: observation for both the rule engine and AI engine
12: observation for the rule engine and interception for the AI engine
20: interception for the rule engine and disabled for the AI engine
21: interception for the rule engine and observation for the AI engine
22: interception for both the rule engine and AI engine
 * @method array getCCList() Obtain Sandbox cluster origin-pull outbound IP list
 * @method void setCCList(array $CCList) Set Sandbox cluster origin-pull outbound IP list
 * @method array getRsList() Obtain Production cluster origin-pull outbound IP list
 * @method void setRsList(array $RsList) Set Production cluster origin-pull outbound IP list
 * @method array getPorts() Obtain Service port configuration
 * @method void setPorts(array $Ports) Set Service port configuration
 * @method array getLoadBalancerSet() Obtain CLB-related configuration
 * @method void setLoadBalancerSet(array $LoadBalancerSet) Set CLB-related configuration
 * @method integer getAppId() Obtain User ID
 * @method void setAppId(integer $AppId) Set User ID
 * @method integer getState() Obtain LB listener status of the domain name protected by CLB WAF0: Operation successful.
4: The LB is being bound.
6: The LB is being unbound.
7: Failed to unbind the LB.
8: Failed to bind the LB.
10: Internal error.
 * @method void setState(integer $State) Set LB listener status of the domain name protected by CLB WAF0: Operation successful.
4: The LB is being bound.
6: The LB is being unbound.
7: Failed to unbind the LB.
8: Failed to bind the LB.
10: Internal error.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method integer getIpv6Status() Obtain IPv6 switch status.
0: disabled
1: enabled
 * @method void setIpv6Status(integer $Ipv6Status) Set IPv6 switch status.
0: disabled
1: enabled
 * @method integer getBotStatus() Obtain Bot switch status.
0: disabled
1: disabled
2: enabled
3: enabled
 * @method void setBotStatus(integer $BotStatus) Set Bot switch status.
0: disabled
1: disabled
2: enabled
3: enabled
 * @method integer getLevel() Obtain Instance version information.
101: Small and Micro Agile Edition
102: Small and Micro Ultra-light Edition
2: Advanced Edition
3: Enterprise Edition
4: Ultimate Edition
6: Exclusive Edition
 * @method void setLevel(integer $Level) Set Instance version information.
101: Small and Micro Agile Edition
102: Small and Micro Ultra-light Edition
2: Advanced Edition
3: Enterprise Edition
4: Ultimate Edition
6: Exclusive Edition
 * @method integer getPostCLSStatus() Obtain Shipping status of CLS.
0: disabled
1: enabled
 * @method void setPostCLSStatus(integer $PostCLSStatus) Set Shipping status of CLS.
0: disabled
1: enabled
 * @method integer getPostCKafkaStatus() Obtain Shipping status of CKafka.
0: disabled
1: enabled
 * @method void setPostCKafkaStatus(integer $PostCKafkaStatus) Set Shipping status of CKafka.
0: disabled
1: enabled
 * @method string getCdcClusters() Obtain Cluster information accessed by the CDC instance domain name, which can be ignored for non-CDC instances.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCdcClusters(string $CdcClusters) Set Cluster information accessed by the CDC instance domain name, which can be ignored for non-CDC instances.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getApiStatus() Obtain API security switch status.
0: disabled
1: enabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApiStatus(integer $ApiStatus) Set API security switch status.
0: disabled
1: enabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAlbType() Obtain Application-based CLB type. The default value is clb.
clb: layer-7 CLB
apisix: APISIX gateway
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlbType(string $AlbType) Set Application-based CLB type. The default value is clb.
clb: layer-7 CLB
apisix: APISIX gateway
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSgState() Obtain Security group status.
0: not display
1: non-Tencent Cloud origin server
2: Security group binding failed.
3: security groups changed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSgState(integer $SgState) Set Security group status.
0: not display
1: non-Tencent Cloud origin server
2: Security group binding failed.
3: security groups changed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSgDetail() Obtain Detailed Explanation of Security Group Status

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSgDetail(string $SgDetail) Set Detailed Explanation of Security Group Status

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCloudType() Obtain Domain name cloud environment. hybrid: hybrid cloud domain name
public: public cloud domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloudType(string $CloudType) Set Domain name cloud environment. hybrid: hybrid cloud domain name
public: public cloud domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNote() Obtain Domain name remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNote(string $Note) Set Domain name remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSrcList() Obtain SaaS WAF origin server IP list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSrcList(array $SrcList) Set SaaS WAF origin server IP list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getUpstreamDomainList() Obtain SaaS WAF origin server domain name list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpstreamDomainList(array $UpstreamDomainList) Set SaaS WAF origin server domain name list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSgID() Obtain Security group ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSgID(string $SgID) Set Security group ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAccessStatus() Obtain CLB WAF access status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessStatus(integer $AccessStatus) Set CLB WAF access status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLabels() Obtain Domain name tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabels(array $Labels) Set Domain name tag.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DomainInfo extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Domain ID
     */
    public $DomainId;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string CNAME Address
     */
    public $Cname;

    /**
     * @var string Instance type of the domain name.
sparta-waf: SaaS WAF instance
clb-waf: CLB WAF instance
cdc-clb-waf: CLB WAF instances in the CDC environment
     */
    public $Edition;

    /**
     * @var string Region
"Toronto": "ca"
"Guangzhou": "gz"
"Chengdu": "cd"
"Fuzhou": "fzec"
"Shenzhen": "szx"
"India": "in"
"Jinan": "jnec"
"Chongqing": "cq"
"Tianjin": "tsn"
"Northeast Europe": "ru"
"Nanjing": "nj"
"Silicon Valley, USA": "usw"
"Thailand": "th"
"Guangzhou Open": "gzopen"
"Shenzhen Finance": "szjr"
"Frankfurt": "de"
"Japan": "jp"
"Virginia": "use"
"Beijing": "bj"
"Hong Kong (China)": "hk"
"Hangzhou": "hzec"
"Beijing Finance": "bjjr"
"Shanghai Finance": "shjr"
"Taipei (China)": "tpe"
"Seoul": "kr"
"Shanghai": "sh"
"Singapore": "sg"
"Qingyuan": "qy"
     */
    public $Region;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var integer Access log switch status
0: disabled
1: enabled
     */
    public $ClsStatus;

    /**
     * @var integer CLB WAF usage mode
0: image mode
1: cleaning mode
     */
    public $FlowMode;

    /**
     * @var integer WAF switch status
0: disabled
1: enabled
     */
    public $Status;

    /**
     * @var integer Rule engine protection mode
0: observation mode
1: interception mode
     */
    public $Mode;

    /**
     * @var integer Joint status of rule engine and AI engine protection modes.
1: initial status: interception for the rule engine and disabled for the AI engine
10: observation for the rule engine and disabled for the AI engine
11: observation for both the rule engine and AI engine
12: observation for the rule engine and interception for the AI engine
20: interception for the rule engine and disabled for the AI engine
21: interception for the rule engine and observation for the AI engine
22: interception for both the rule engine and AI engine
     */
    public $Engine;

    /**
     * @var array Sandbox cluster origin-pull outbound IP list
     */
    public $CCList;

    /**
     * @var array Production cluster origin-pull outbound IP list
     */
    public $RsList;

    /**
     * @var array Service port configuration
     */
    public $Ports;

    /**
     * @var array CLB-related configuration
     */
    public $LoadBalancerSet;

    /**
     * @var integer User ID
     */
    public $AppId;

    /**
     * @var integer LB listener status of the domain name protected by CLB WAF0: Operation successful.
4: The LB is being bound.
6: The LB is being unbound.
7: Failed to unbind the LB.
8: Failed to bind the LB.
10: Internal error.
     */
    public $State;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var integer IPv6 switch status.
0: disabled
1: enabled
     */
    public $Ipv6Status;

    /**
     * @var integer Bot switch status.
0: disabled
1: disabled
2: enabled
3: enabled
     */
    public $BotStatus;

    /**
     * @var integer Instance version information.
101: Small and Micro Agile Edition
102: Small and Micro Ultra-light Edition
2: Advanced Edition
3: Enterprise Edition
4: Ultimate Edition
6: Exclusive Edition
     */
    public $Level;

    /**
     * @var integer Shipping status of CLS.
0: disabled
1: enabled
     */
    public $PostCLSStatus;

    /**
     * @var integer Shipping status of CKafka.
0: disabled
1: enabled
     */
    public $PostCKafkaStatus;

    /**
     * @var string Cluster information accessed by the CDC instance domain name, which can be ignored for non-CDC instances.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CdcClusters;

    /**
     * @var integer API security switch status.
0: disabled
1: enabled
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApiStatus;

    /**
     * @var string Application-based CLB type. The default value is clb.
clb: layer-7 CLB
apisix: APISIX gateway
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlbType;

    /**
     * @var integer Security group status.
0: not display
1: non-Tencent Cloud origin server
2: Security group binding failed.
3: security groups changed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SgState;

    /**
     * @var string Detailed Explanation of Security Group Status

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SgDetail;

    /**
     * @var string Domain name cloud environment. hybrid: hybrid cloud domain name
public: public cloud domain name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloudType;

    /**
     * @var string Domain name remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Note;

    /**
     * @var array SaaS WAF origin server IP list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SrcList;

    /**
     * @var array SaaS WAF origin server domain name list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpstreamDomainList;

    /**
     * @var string Security group ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SgID;

    /**
     * @var integer CLB WAF access status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessStatus;

    /**
     * @var array Domain name tag.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Labels;

    /**
     * @param string $Domain Domain name
     * @param string $DomainId Domain ID
     * @param string $InstanceId Instance ID
     * @param string $Cname CNAME Address
     * @param string $Edition Instance type of the domain name.
sparta-waf: SaaS WAF instance
clb-waf: CLB WAF instance
cdc-clb-waf: CLB WAF instances in the CDC environment
     * @param string $Region Region
"Toronto": "ca"
"Guangzhou": "gz"
"Chengdu": "cd"
"Fuzhou": "fzec"
"Shenzhen": "szx"
"India": "in"
"Jinan": "jnec"
"Chongqing": "cq"
"Tianjin": "tsn"
"Northeast Europe": "ru"
"Nanjing": "nj"
"Silicon Valley, USA": "usw"
"Thailand": "th"
"Guangzhou Open": "gzopen"
"Shenzhen Finance": "szjr"
"Frankfurt": "de"
"Japan": "jp"
"Virginia": "use"
"Beijing": "bj"
"Hong Kong (China)": "hk"
"Hangzhou": "hzec"
"Beijing Finance": "bjjr"
"Shanghai Finance": "shjr"
"Taipei (China)": "tpe"
"Seoul": "kr"
"Shanghai": "sh"
"Singapore": "sg"
"Qingyuan": "qy"
     * @param string $InstanceName Instance name
     * @param integer $ClsStatus Access log switch status
0: disabled
1: enabled
     * @param integer $FlowMode CLB WAF usage mode
0: image mode
1: cleaning mode
     * @param integer $Status WAF switch status
0: disabled
1: enabled
     * @param integer $Mode Rule engine protection mode
0: observation mode
1: interception mode
     * @param integer $Engine Joint status of rule engine and AI engine protection modes.
1: initial status: interception for the rule engine and disabled for the AI engine
10: observation for the rule engine and disabled for the AI engine
11: observation for both the rule engine and AI engine
12: observation for the rule engine and interception for the AI engine
20: interception for the rule engine and disabled for the AI engine
21: interception for the rule engine and observation for the AI engine
22: interception for both the rule engine and AI engine
     * @param array $CCList Sandbox cluster origin-pull outbound IP list
     * @param array $RsList Production cluster origin-pull outbound IP list
     * @param array $Ports Service port configuration
     * @param array $LoadBalancerSet CLB-related configuration
     * @param integer $AppId User ID
     * @param integer $State LB listener status of the domain name protected by CLB WAF0: Operation successful.
4: The LB is being bound.
6: The LB is being unbound.
7: Failed to unbind the LB.
8: Failed to bind the LB.
10: Internal error.
     * @param string $CreateTime Creation time
     * @param integer $Ipv6Status IPv6 switch status.
0: disabled
1: enabled
     * @param integer $BotStatus Bot switch status.
0: disabled
1: disabled
2: enabled
3: enabled
     * @param integer $Level Instance version information.
101: Small and Micro Agile Edition
102: Small and Micro Ultra-light Edition
2: Advanced Edition
3: Enterprise Edition
4: Ultimate Edition
6: Exclusive Edition
     * @param integer $PostCLSStatus Shipping status of CLS.
0: disabled
1: enabled
     * @param integer $PostCKafkaStatus Shipping status of CKafka.
0: disabled
1: enabled
     * @param string $CdcClusters Cluster information accessed by the CDC instance domain name, which can be ignored for non-CDC instances.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ApiStatus API security switch status.
0: disabled
1: enabled
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AlbType Application-based CLB type. The default value is clb.
clb: layer-7 CLB
apisix: APISIX gateway
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SgState Security group status.
0: not display
1: non-Tencent Cloud origin server
2: Security group binding failed.
3: security groups changed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SgDetail Detailed Explanation of Security Group Status

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CloudType Domain name cloud environment. hybrid: hybrid cloud domain name
public: public cloud domain name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Note Domain name remarks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SrcList SaaS WAF origin server IP list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $UpstreamDomainList SaaS WAF origin server domain name list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SgID Security group ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AccessStatus CLB WAF access status
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

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ClsStatus",$param) and $param["ClsStatus"] !== null) {
            $this->ClsStatus = $param["ClsStatus"];
        }

        if (array_key_exists("FlowMode",$param) and $param["FlowMode"] !== null) {
            $this->FlowMode = $param["FlowMode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("CCList",$param) and $param["CCList"] !== null) {
            $this->CCList = $param["CCList"];
        }

        if (array_key_exists("RsList",$param) and $param["RsList"] !== null) {
            $this->RsList = $param["RsList"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = [];
            foreach ($param["Ports"] as $key => $value){
                $obj = new PortInfo();
                $obj->deserialize($value);
                array_push($this->Ports, $obj);
            }
        }

        if (array_key_exists("LoadBalancerSet",$param) and $param["LoadBalancerSet"] !== null) {
            $this->LoadBalancerSet = [];
            foreach ($param["LoadBalancerSet"] as $key => $value){
                $obj = new LoadBalancerPackageNew();
                $obj->deserialize($value);
                array_push($this->LoadBalancerSet, $obj);
            }
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Ipv6Status",$param) and $param["Ipv6Status"] !== null) {
            $this->Ipv6Status = $param["Ipv6Status"];
        }

        if (array_key_exists("BotStatus",$param) and $param["BotStatus"] !== null) {
            $this->BotStatus = $param["BotStatus"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("PostCLSStatus",$param) and $param["PostCLSStatus"] !== null) {
            $this->PostCLSStatus = $param["PostCLSStatus"];
        }

        if (array_key_exists("PostCKafkaStatus",$param) and $param["PostCKafkaStatus"] !== null) {
            $this->PostCKafkaStatus = $param["PostCKafkaStatus"];
        }

        if (array_key_exists("CdcClusters",$param) and $param["CdcClusters"] !== null) {
            $this->CdcClusters = $param["CdcClusters"];
        }

        if (array_key_exists("ApiStatus",$param) and $param["ApiStatus"] !== null) {
            $this->ApiStatus = $param["ApiStatus"];
        }

        if (array_key_exists("AlbType",$param) and $param["AlbType"] !== null) {
            $this->AlbType = $param["AlbType"];
        }

        if (array_key_exists("SgState",$param) and $param["SgState"] !== null) {
            $this->SgState = $param["SgState"];
        }

        if (array_key_exists("SgDetail",$param) and $param["SgDetail"] !== null) {
            $this->SgDetail = $param["SgDetail"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("SrcList",$param) and $param["SrcList"] !== null) {
            $this->SrcList = $param["SrcList"];
        }

        if (array_key_exists("UpstreamDomainList",$param) and $param["UpstreamDomainList"] !== null) {
            $this->UpstreamDomainList = $param["UpstreamDomainList"];
        }

        if (array_key_exists("SgID",$param) and $param["SgID"] !== null) {
            $this->SgID = $param["SgID"];
        }

        if (array_key_exists("AccessStatus",$param) and $param["AccessStatus"] !== null) {
            $this->AccessStatus = $param["AccessStatus"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }
    }
}
