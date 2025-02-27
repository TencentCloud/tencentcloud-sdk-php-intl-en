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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertificateBindResourceTaskDetail response structure.
 *
 * @method array getCLB() Obtain The details of associated CLB resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCLB(array $CLB) Set The details of associated CLB resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCDN() Obtain The details of associated CDN resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCDN(array $CDN) Set The details of associated CDN resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getWAF() Obtain The details of associated WAF resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWAF(array $WAF) Set The details of associated WAF resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDDOS() Obtain The details of associated Anti-DDS resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDDOS(array $DDOS) Set The details of associated Anti-DDS resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLIVE() Obtain The details of associated LIVE resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLIVE(array $LIVE) Set The details of associated LIVE resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getVOD() Obtain The details of associated VOD resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVOD(array $VOD) Set The details of associated VOD resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTKE() Obtain The details of associated TKE resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTKE(array $TKE) Set The details of associated TKE resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAPIGATEWAY() Obtain The details of associated APIGATEWAY resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAPIGATEWAY(array $APIGATEWAY) Set The details of associated APIGATEWAY resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTCB() Obtain The details of associated TCB resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTCB(array $TCB) Set The details of associated TCB resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTEO() Obtain The details of associated TEO resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTEO(array $TEO) Set The details of associated TEO resources.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain The status of the async task. Valid values: `0` for querying, `1` for successful, and `2` for abnormal. If the status is `1`, check the result of `BindResourceResult` ; if the status is `2`, check the `error` .
 * @method void setStatus(integer $Status) Set The status of the async task. Valid values: `0` for querying, `1` for successful, and `2` for abnormal. If the status is `1`, check the result of `BindResourceResult` ; if the status is `2`, check the `error` .
 * @method string getCacheTime() Obtain The cache time of the current result.
 * @method void setCacheTime(string $CacheTime) Set The cache time of the current result.
 * @method array getTSE() Obtain Associated TSE resource details
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTSE(array $TSE) Set Associated TSE resource details
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getCOS() Obtain Information of associated cos resource.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCOS(array $COS) Set Information of associated cos resource.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeCertificateBindResourceTaskDetailResponse extends AbstractModel
{
    /**
     * @var array The details of associated CLB resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CLB;

    /**
     * @var array The details of associated CDN resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CDN;

    /**
     * @var array The details of associated WAF resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WAF;

    /**
     * @var array The details of associated Anti-DDS resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DDOS;

    /**
     * @var array The details of associated LIVE resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LIVE;

    /**
     * @var array The details of associated VOD resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VOD;

    /**
     * @var array The details of associated TKE resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TKE;

    /**
     * @var array The details of associated APIGATEWAY resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $APIGATEWAY;

    /**
     * @var array The details of associated TCB resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TCB;

    /**
     * @var array The details of associated TEO resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TEO;

    /**
     * @var integer The status of the async task. Valid values: `0` for querying, `1` for successful, and `2` for abnormal. If the status is `1`, check the result of `BindResourceResult` ; if the status is `2`, check the `error` .
     */
    public $Status;

    /**
     * @var string The cache time of the current result.
     */
    public $CacheTime;

    /**
     * @var array Associated TSE resource details
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TSE;

    /**
     * @var array Information of associated cos resource.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $COS;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $CLB The details of associated CLB resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CDN The details of associated CDN resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $WAF The details of associated WAF resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DDOS The details of associated Anti-DDS resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $LIVE The details of associated LIVE resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $VOD The details of associated VOD resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TKE The details of associated TKE resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $APIGATEWAY The details of associated APIGATEWAY resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TCB The details of associated TCB resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TEO The details of associated TEO resources.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status The status of the async task. Valid values: `0` for querying, `1` for successful, and `2` for abnormal. If the status is `1`, check the result of `BindResourceResult` ; if the status is `2`, check the `error` .
     * @param string $CacheTime The cache time of the current result.
     * @param array $TSE Associated TSE resource details
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $COS Information of associated cos resource.
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
        if (array_key_exists("CLB",$param) and $param["CLB"] !== null) {
            $this->CLB = [];
            foreach ($param["CLB"] as $key => $value){
                $obj = new ClbInstanceList();
                $obj->deserialize($value);
                array_push($this->CLB, $obj);
            }
        }

        if (array_key_exists("CDN",$param) and $param["CDN"] !== null) {
            $this->CDN = [];
            foreach ($param["CDN"] as $key => $value){
                $obj = new CdnInstanceList();
                $obj->deserialize($value);
                array_push($this->CDN, $obj);
            }
        }

        if (array_key_exists("WAF",$param) and $param["WAF"] !== null) {
            $this->WAF = [];
            foreach ($param["WAF"] as $key => $value){
                $obj = new WafInstanceList();
                $obj->deserialize($value);
                array_push($this->WAF, $obj);
            }
        }

        if (array_key_exists("DDOS",$param) and $param["DDOS"] !== null) {
            $this->DDOS = [];
            foreach ($param["DDOS"] as $key => $value){
                $obj = new DdosInstanceList();
                $obj->deserialize($value);
                array_push($this->DDOS, $obj);
            }
        }

        if (array_key_exists("LIVE",$param) and $param["LIVE"] !== null) {
            $this->LIVE = [];
            foreach ($param["LIVE"] as $key => $value){
                $obj = new LiveInstanceList();
                $obj->deserialize($value);
                array_push($this->LIVE, $obj);
            }
        }

        if (array_key_exists("VOD",$param) and $param["VOD"] !== null) {
            $this->VOD = [];
            foreach ($param["VOD"] as $key => $value){
                $obj = new VODInstanceList();
                $obj->deserialize($value);
                array_push($this->VOD, $obj);
            }
        }

        if (array_key_exists("TKE",$param) and $param["TKE"] !== null) {
            $this->TKE = [];
            foreach ($param["TKE"] as $key => $value){
                $obj = new TkeInstanceList();
                $obj->deserialize($value);
                array_push($this->TKE, $obj);
            }
        }

        if (array_key_exists("APIGATEWAY",$param) and $param["APIGATEWAY"] !== null) {
            $this->APIGATEWAY = [];
            foreach ($param["APIGATEWAY"] as $key => $value){
                $obj = new ApiGatewayInstanceList();
                $obj->deserialize($value);
                array_push($this->APIGATEWAY, $obj);
            }
        }

        if (array_key_exists("TCB",$param) and $param["TCB"] !== null) {
            $this->TCB = [];
            foreach ($param["TCB"] as $key => $value){
                $obj = new TCBInstanceList();
                $obj->deserialize($value);
                array_push($this->TCB, $obj);
            }
        }

        if (array_key_exists("TEO",$param) and $param["TEO"] !== null) {
            $this->TEO = [];
            foreach ($param["TEO"] as $key => $value){
                $obj = new TeoInstanceList();
                $obj->deserialize($value);
                array_push($this->TEO, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CacheTime",$param) and $param["CacheTime"] !== null) {
            $this->CacheTime = $param["CacheTime"];
        }

        if (array_key_exists("TSE",$param) and $param["TSE"] !== null) {
            $this->TSE = [];
            foreach ($param["TSE"] as $key => $value){
                $obj = new TSEInstanceList();
                $obj->deserialize($value);
                array_push($this->TSE, $obj);
            }
        }

        if (array_key_exists("COS",$param) and $param["COS"] !== null) {
            $this->COS = [];
            foreach ($param["COS"] as $key => $value){
                $obj = new COSInstanceList();
                $obj->deserialize($value);
                array_push($this->COS, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
