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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServiceForApiApp response structure.
 *
 * @method string getServiceId() Obtain Unique service ID.
 * @method void setServiceId(string $ServiceId) Set Unique service ID.
 * @method array getAvailableEnvironments() Obtain Service environment list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAvailableEnvironments(array $AvailableEnvironments) Set Service environment list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceName() Obtain Service name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceName(string $ServiceName) Set Service name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceDesc() Obtain Service description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceDesc(string $ServiceDesc) Set Service description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Protocol supported by service. Valid values: http, https, http&https.
 * @method void setProtocol(string $Protocol) Set Protocol supported by service. Valid values: http, https, http&https.
 * @method string getCreatedTime() Obtain Service creation time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Service creation time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getModifiedTime() Obtain Service modification time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setModifiedTime(string $ModifiedTime) Set Service modification time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getNetTypes() Obtain Network type list. INNER: private network access; OUTER: public network access.
 * @method void setNetTypes(array $NetTypes) Set Network type list. INNER: private network access; OUTER: public network access.
 * @method string getInternalSubDomain() Obtain Subdomain name for private network access.
 * @method void setInternalSubDomain(string $InternalSubDomain) Set Subdomain name for private network access.
 * @method string getOuterSubDomain() Obtain Subdomain name for public network access.
 * @method void setOuterSubDomain(string $OuterSubDomain) Set Subdomain name for public network access.
 * @method integer getInnerHttpPort() Obtain Service port number for HTTP access over private network.
 * @method void setInnerHttpPort(integer $InnerHttpPort) Set Service port number for HTTP access over private network.
 * @method integer getInnerHttpsPort() Obtain Port number for HTTPS access over private network.
 * @method void setInnerHttpsPort(integer $InnerHttpsPort) Set Port number for HTTPS access over private network.
 * @method integer getApiTotalCount() Obtain Total number of APIs.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiTotalCount(integer $ApiTotalCount) Set Total number of APIs.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getApiIdStatusSet() Obtain API list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApiIdStatusSet(array $ApiIdStatusSet) Set API list.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getUsagePlanTotalCount() Obtain Total number of usage plans.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUsagePlanTotalCount(integer $UsagePlanTotalCount) Set Total number of usage plans.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getUsagePlanList() Obtain Usage plan array.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUsagePlanList(array $UsagePlanList) Set Usage plan array.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIpVersion() Obtain IP version.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIpVersion(string $IpVersion) Set IP version.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUserType() Obtain Service user type.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserType(string $UserType) Set Service user type.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSetId() Obtain Reserved field.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSetId(integer $SetId) Set Reserved field.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag bound to the service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag bound to the service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeServiceForApiAppResponse extends AbstractModel
{
    /**
     * @var string Unique service ID.
     */
    public $ServiceId;

    /**
     * @var array Service environment list.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AvailableEnvironments;

    /**
     * @var string Service name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceName;

    /**
     * @var string Service description.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceDesc;

    /**
     * @var string Protocol supported by service. Valid values: http, https, http&https.
     */
    public $Protocol;

    /**
     * @var string Service creation time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedTime;

    /**
     * @var string Service modification time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ModifiedTime;

    /**
     * @var array Network type list. INNER: private network access; OUTER: public network access.
     */
    public $NetTypes;

    /**
     * @var string Subdomain name for private network access.
     */
    public $InternalSubDomain;

    /**
     * @var string Subdomain name for public network access.
     */
    public $OuterSubDomain;

    /**
     * @var integer Service port number for HTTP access over private network.
     */
    public $InnerHttpPort;

    /**
     * @var integer Port number for HTTPS access over private network.
     */
    public $InnerHttpsPort;

    /**
     * @var integer Total number of APIs.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiTotalCount;

    /**
     * @var array API list.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApiIdStatusSet;

    /**
     * @var integer Total number of usage plans.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UsagePlanTotalCount;

    /**
     * @var array Usage plan array.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UsagePlanList;

    /**
     * @var string IP version.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IpVersion;

    /**
     * @var string Service user type.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserType;

    /**
     * @var integer Reserved field.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SetId;

    /**
     * @var array Tag bound to the service.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ServiceId Unique service ID.
     * @param array $AvailableEnvironments Service environment list.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceName Service name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceDesc Service description.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Protocol supported by service. Valid values: http, https, http&https.
     * @param string $CreatedTime Service creation time.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ModifiedTime Service modification time.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $NetTypes Network type list. INNER: private network access; OUTER: public network access.
     * @param string $InternalSubDomain Subdomain name for private network access.
     * @param string $OuterSubDomain Subdomain name for public network access.
     * @param integer $InnerHttpPort Service port number for HTTP access over private network.
     * @param integer $InnerHttpsPort Port number for HTTPS access over private network.
     * @param integer $ApiTotalCount Total number of APIs.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $ApiIdStatusSet API list.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $UsagePlanTotalCount Total number of usage plans.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $UsagePlanList Usage plan array.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $IpVersion IP version.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UserType Service user type.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SetId Reserved field.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag bound to the service.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("AvailableEnvironments",$param) and $param["AvailableEnvironments"] !== null) {
            $this->AvailableEnvironments = $param["AvailableEnvironments"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceDesc",$param) and $param["ServiceDesc"] !== null) {
            $this->ServiceDesc = $param["ServiceDesc"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("NetTypes",$param) and $param["NetTypes"] !== null) {
            $this->NetTypes = $param["NetTypes"];
        }

        if (array_key_exists("InternalSubDomain",$param) and $param["InternalSubDomain"] !== null) {
            $this->InternalSubDomain = $param["InternalSubDomain"];
        }

        if (array_key_exists("OuterSubDomain",$param) and $param["OuterSubDomain"] !== null) {
            $this->OuterSubDomain = $param["OuterSubDomain"];
        }

        if (array_key_exists("InnerHttpPort",$param) and $param["InnerHttpPort"] !== null) {
            $this->InnerHttpPort = $param["InnerHttpPort"];
        }

        if (array_key_exists("InnerHttpsPort",$param) and $param["InnerHttpsPort"] !== null) {
            $this->InnerHttpsPort = $param["InnerHttpsPort"];
        }

        if (array_key_exists("ApiTotalCount",$param) and $param["ApiTotalCount"] !== null) {
            $this->ApiTotalCount = $param["ApiTotalCount"];
        }

        if (array_key_exists("ApiIdStatusSet",$param) and $param["ApiIdStatusSet"] !== null) {
            $this->ApiIdStatusSet = [];
            foreach ($param["ApiIdStatusSet"] as $key => $value){
                $obj = new ApiIdStatus();
                $obj->deserialize($value);
                array_push($this->ApiIdStatusSet, $obj);
            }
        }

        if (array_key_exists("UsagePlanTotalCount",$param) and $param["UsagePlanTotalCount"] !== null) {
            $this->UsagePlanTotalCount = $param["UsagePlanTotalCount"];
        }

        if (array_key_exists("UsagePlanList",$param) and $param["UsagePlanList"] !== null) {
            $this->UsagePlanList = [];
            foreach ($param["UsagePlanList"] as $key => $value){
                $obj = new UsagePlan();
                $obj->deserialize($value);
                array_push($this->UsagePlanList, $obj);
            }
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("SetId",$param) and $param["SetId"] !== null) {
            $this->SetId = $param["SetId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
