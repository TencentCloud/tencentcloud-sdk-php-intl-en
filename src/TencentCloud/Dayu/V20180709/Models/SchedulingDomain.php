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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scheduling domain name information
 *
 * @method string getDomain() Obtain Scheduling domain name
 * @method void setDomain(string $Domain) Set Scheduling domain name
 * @method array getBGPIpList() Obtain List of BGP IPs
 * @method void setBGPIpList(array $BGPIpList) Set List of BGP IPs
 * @method array getCTCCIpList() Obtain List of CTCC IPs
 * @method void setCTCCIpList(array $CTCCIpList) Set List of CTCC IPs
 * @method array getCUCCIpList() Obtain List of CUCC IPs
 * @method void setCUCCIpList(array $CUCCIpList) Set List of CUCC IPs
 * @method array getCMCCIpList() Obtain List of CMCC IPs
 * @method void setCMCCIpList(array $CMCCIpList) Set List of CMCC IPs
 * @method array getOverseaIpList() Obtain List of IPs outside Mainland China
 * @method void setOverseaIpList(array $OverseaIpList) Set List of IPs outside Mainland China
 * @method string getMethod() Obtain Scheduling method. It only supports `priority` now.
 * @method void setMethod(string $Method) Set Scheduling method. It only supports `priority` now.
 * @method string getCreateTime() Obtain The creation time.
 * @method void setCreateTime(string $CreateTime) Set The creation time.
 * @method integer getTTL() Obtain 
 * @method void setTTL(integer $TTL) Set 
 * @method integer getStatus() Obtain Status
 * @method void setStatus(integer $Status) Set Status
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 */
class SchedulingDomain extends AbstractModel
{
    /**
     * @var string Scheduling domain name
     */
    public $Domain;

    /**
     * @var array List of BGP IPs
     */
    public $BGPIpList;

    /**
     * @var array List of CTCC IPs
     */
    public $CTCCIpList;

    /**
     * @var array List of CUCC IPs
     */
    public $CUCCIpList;

    /**
     * @var array List of CMCC IPs
     */
    public $CMCCIpList;

    /**
     * @var array List of IPs outside Mainland China
     */
    public $OverseaIpList;

    /**
     * @var string Scheduling method. It only supports `priority` now.
     */
    public $Method;

    /**
     * @var string The creation time.
     */
    public $CreateTime;

    /**
     * @var integer 
     */
    public $TTL;

    /**
     * @var integer Status
     */
    public $Status;

    /**
     * @var string Modification time
     */
    public $ModifyTime;

    /**
     * @param string $Domain Scheduling domain name
     * @param array $BGPIpList List of BGP IPs
     * @param array $CTCCIpList List of CTCC IPs
     * @param array $CUCCIpList List of CUCC IPs
     * @param array $CMCCIpList List of CMCC IPs
     * @param array $OverseaIpList List of IPs outside Mainland China
     * @param string $Method Scheduling method. It only supports `priority` now.
     * @param string $CreateTime The creation time.
     * @param integer $TTL 
     * @param integer $Status Status
     * @param string $ModifyTime Modification time
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

        if (array_key_exists("BGPIpList",$param) and $param["BGPIpList"] !== null) {
            $this->BGPIpList = $param["BGPIpList"];
        }

        if (array_key_exists("CTCCIpList",$param) and $param["CTCCIpList"] !== null) {
            $this->CTCCIpList = $param["CTCCIpList"];
        }

        if (array_key_exists("CUCCIpList",$param) and $param["CUCCIpList"] !== null) {
            $this->CUCCIpList = $param["CUCCIpList"];
        }

        if (array_key_exists("CMCCIpList",$param) and $param["CMCCIpList"] !== null) {
            $this->CMCCIpList = $param["CMCCIpList"];
        }

        if (array_key_exists("OverseaIpList",$param) and $param["OverseaIpList"] !== null) {
            $this->OverseaIpList = $param["OverseaIpList"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
