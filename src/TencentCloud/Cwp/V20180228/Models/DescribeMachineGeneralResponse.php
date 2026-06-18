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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMachineGeneral response structure.
 *
 * @method integer getMachineCnt() Obtain <p>Total number of assets</p>
 * @method void setMachineCnt(integer $MachineCnt) Set <p>Total number of assets</p>
 * @method integer getTencentCloudMachineCnt() Obtain <p>Number of Tencent Cloud machines</p>
 * @method void setTencentCloudMachineCnt(integer $TencentCloudMachineCnt) Set <p>Number of Tencent Cloud machines</p>
 * @method integer getAliCloudMachineCnt() Obtain <p>Number of Alibaba Cloud machines</p>
 * @method void setAliCloudMachineCnt(integer $AliCloudMachineCnt) Set <p>Number of Alibaba Cloud machines</p>
 * @method integer getBaiduCloudMachineCnt() Obtain <p>Number of Baidu Cloud machines</p>
 * @method void setBaiduCloudMachineCnt(integer $BaiduCloudMachineCnt) Set <p>Number of Baidu Cloud machines</p>
 * @method integer getIDCMachineCnt() Obtain <p>Number of IDC machines</p>
 * @method void setIDCMachineCnt(integer $IDCMachineCnt) Set <p>Number of IDC machines</p>
 * @method integer getOtherCloudMachineCnt() Obtain <p>Number of machines from other cloud service vendors</p>
 * @method void setOtherCloudMachineCnt(integer $OtherCloudMachineCnt) Set <p>Number of machines from other cloud service vendors</p>
 * @method integer getProtectMachineCnt() Obtain <p>Number of protected machines</p>
 * @method void setProtectMachineCnt(integer $ProtectMachineCnt) Set <p>Number of protected machines</p>
 * @method integer getBaseMachineCnt() Obtain <p>Number of protected Basic Edition machines</p>
 * @method void setBaseMachineCnt(integer $BaseMachineCnt) Set <p>Number of protected Basic Edition machines</p>
 * @method integer getSpecialtyMachineCnt() Obtain <p>Number of protected Pro Edition machines</p>
 * @method void setSpecialtyMachineCnt(integer $SpecialtyMachineCnt) Set <p>Number of protected Pro Edition machines</p>
 * @method integer getFlagshipMachineCnt() Obtain <p>Number of protected Ultimate Edition machines</p>
 * @method void setFlagshipMachineCnt(integer $FlagshipMachineCnt) Set <p>Number of protected Ultimate Edition machines</p>
 * @method integer getRiskMachineCnt() Obtain <p>Number of risky machines</p>
 * @method void setRiskMachineCnt(integer $RiskMachineCnt) Set <p>Number of risky machines</p>
 * @method integer getCompareYesterdayRiskMachineCnt() Obtain <p>Change in the number of risky machines compared with yesterday</p>
 * @method void setCompareYesterdayRiskMachineCnt(integer $CompareYesterdayRiskMachineCnt) Set <p>Change in the number of risky machines compared with yesterday</p>
 * @method integer getCompareYesterdayNotProtectMachineCnt() Obtain <p>Change in the number of unprotected machines compared with yesterday</p>
 * @method void setCompareYesterdayNotProtectMachineCnt(integer $CompareYesterdayNotProtectMachineCnt) Set <p>Change in the number of unprotected machines compared with yesterday</p>
 * @method integer getCompareYesterdayDeadlineMachineCnt() Obtain <p>Change in the number of machines expiring soon compared with yesterday</p>
 * @method void setCompareYesterdayDeadlineMachineCnt(integer $CompareYesterdayDeadlineMachineCnt) Set <p>Change in the number of machines expiring soon compared with yesterday</p>
 * @method integer getDeadlineMachineCnt() Obtain <p>Number of machines about to expire</p>
 * @method void setDeadlineMachineCnt(integer $DeadlineMachineCnt) Set <p>Number of machines about to expire</p>
 * @method integer getNotProtectMachineCnt() Obtain <p>Number of unprotected machines</p>
 * @method void setNotProtectMachineCnt(integer $NotProtectMachineCnt) Set <p>Number of unprotected machines</p>
 * @method integer getLHGeneralDiscountCnt() Obtain <p>Number of protected Lighthouse machines</p>
 * @method void setLHGeneralDiscountCnt(integer $LHGeneralDiscountCnt) Set <p>Number of protected Lighthouse machines</p>
 * @method integer getCompareYesterdayMachineCnt() Obtain <p>Change in the number of newly added hosts compared with yesterday</p>
 * @method void setCompareYesterdayMachineCnt(integer $CompareYesterdayMachineCnt) Set <p>Change in the number of newly added hosts compared with yesterday</p>
 * @method integer getMachineDestroyAfterOfflineHours() Obtain <p>Automatic cleanup time, maximum 720 hours, minimum 0, default 0, 0=disabled</p>
 * @method void setMachineDestroyAfterOfflineHours(integer $MachineDestroyAfterOfflineHours) Set <p>Automatic cleanup time, maximum 720 hours, minimum 0, default 0, 0=disabled</p>
 * @method array getCloudFrom() Obtain <p>Cloud server type array</p>
 * @method void setCloudFrom(array $CloudFrom) Set <p>Cloud server type array</p>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeMachineGeneralResponse extends AbstractModel
{
    /**
     * @var integer <p>Total number of assets</p>
     */
    public $MachineCnt;

    /**
     * @var integer <p>Number of Tencent Cloud machines</p>
     * @deprecated
     */
    public $TencentCloudMachineCnt;

    /**
     * @var integer <p>Number of Alibaba Cloud machines</p>
     * @deprecated
     */
    public $AliCloudMachineCnt;

    /**
     * @var integer <p>Number of Baidu Cloud machines</p>
     * @deprecated
     */
    public $BaiduCloudMachineCnt;

    /**
     * @var integer <p>Number of IDC machines</p>
     * @deprecated
     */
    public $IDCMachineCnt;

    /**
     * @var integer <p>Number of machines from other cloud service vendors</p>
     * @deprecated
     */
    public $OtherCloudMachineCnt;

    /**
     * @var integer <p>Number of protected machines</p>
     */
    public $ProtectMachineCnt;

    /**
     * @var integer <p>Number of protected Basic Edition machines</p>
     */
    public $BaseMachineCnt;

    /**
     * @var integer <p>Number of protected Pro Edition machines</p>
     */
    public $SpecialtyMachineCnt;

    /**
     * @var integer <p>Number of protected Ultimate Edition machines</p>
     */
    public $FlagshipMachineCnt;

    /**
     * @var integer <p>Number of risky machines</p>
     */
    public $RiskMachineCnt;

    /**
     * @var integer <p>Change in the number of risky machines compared with yesterday</p>
     */
    public $CompareYesterdayRiskMachineCnt;

    /**
     * @var integer <p>Change in the number of unprotected machines compared with yesterday</p>
     */
    public $CompareYesterdayNotProtectMachineCnt;

    /**
     * @var integer <p>Change in the number of machines expiring soon compared with yesterday</p>
     */
    public $CompareYesterdayDeadlineMachineCnt;

    /**
     * @var integer <p>Number of machines about to expire</p>
     */
    public $DeadlineMachineCnt;

    /**
     * @var integer <p>Number of unprotected machines</p>
     */
    public $NotProtectMachineCnt;

    /**
     * @var integer <p>Number of protected Lighthouse machines</p>
     */
    public $LHGeneralDiscountCnt;

    /**
     * @var integer <p>Change in the number of newly added hosts compared with yesterday</p>
     */
    public $CompareYesterdayMachineCnt;

    /**
     * @var integer <p>Automatic cleanup time, maximum 720 hours, minimum 0, default 0, 0=disabled</p>
     */
    public $MachineDestroyAfterOfflineHours;

    /**
     * @var array <p>Cloud server type array</p>
     */
    public $CloudFrom;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $MachineCnt <p>Total number of assets</p>
     * @param integer $TencentCloudMachineCnt <p>Number of Tencent Cloud machines</p>
     * @param integer $AliCloudMachineCnt <p>Number of Alibaba Cloud machines</p>
     * @param integer $BaiduCloudMachineCnt <p>Number of Baidu Cloud machines</p>
     * @param integer $IDCMachineCnt <p>Number of IDC machines</p>
     * @param integer $OtherCloudMachineCnt <p>Number of machines from other cloud service vendors</p>
     * @param integer $ProtectMachineCnt <p>Number of protected machines</p>
     * @param integer $BaseMachineCnt <p>Number of protected Basic Edition machines</p>
     * @param integer $SpecialtyMachineCnt <p>Number of protected Pro Edition machines</p>
     * @param integer $FlagshipMachineCnt <p>Number of protected Ultimate Edition machines</p>
     * @param integer $RiskMachineCnt <p>Number of risky machines</p>
     * @param integer $CompareYesterdayRiskMachineCnt <p>Change in the number of risky machines compared with yesterday</p>
     * @param integer $CompareYesterdayNotProtectMachineCnt <p>Change in the number of unprotected machines compared with yesterday</p>
     * @param integer $CompareYesterdayDeadlineMachineCnt <p>Change in the number of machines expiring soon compared with yesterday</p>
     * @param integer $DeadlineMachineCnt <p>Number of machines about to expire</p>
     * @param integer $NotProtectMachineCnt <p>Number of unprotected machines</p>
     * @param integer $LHGeneralDiscountCnt <p>Number of protected Lighthouse machines</p>
     * @param integer $CompareYesterdayMachineCnt <p>Change in the number of newly added hosts compared with yesterday</p>
     * @param integer $MachineDestroyAfterOfflineHours <p>Automatic cleanup time, maximum 720 hours, minimum 0, default 0, 0=disabled</p>
     * @param array $CloudFrom <p>Cloud server type array</p>
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
        if (array_key_exists("MachineCnt",$param) and $param["MachineCnt"] !== null) {
            $this->MachineCnt = $param["MachineCnt"];
        }

        if (array_key_exists("TencentCloudMachineCnt",$param) and $param["TencentCloudMachineCnt"] !== null) {
            $this->TencentCloudMachineCnt = $param["TencentCloudMachineCnt"];
        }

        if (array_key_exists("AliCloudMachineCnt",$param) and $param["AliCloudMachineCnt"] !== null) {
            $this->AliCloudMachineCnt = $param["AliCloudMachineCnt"];
        }

        if (array_key_exists("BaiduCloudMachineCnt",$param) and $param["BaiduCloudMachineCnt"] !== null) {
            $this->BaiduCloudMachineCnt = $param["BaiduCloudMachineCnt"];
        }

        if (array_key_exists("IDCMachineCnt",$param) and $param["IDCMachineCnt"] !== null) {
            $this->IDCMachineCnt = $param["IDCMachineCnt"];
        }

        if (array_key_exists("OtherCloudMachineCnt",$param) and $param["OtherCloudMachineCnt"] !== null) {
            $this->OtherCloudMachineCnt = $param["OtherCloudMachineCnt"];
        }

        if (array_key_exists("ProtectMachineCnt",$param) and $param["ProtectMachineCnt"] !== null) {
            $this->ProtectMachineCnt = $param["ProtectMachineCnt"];
        }

        if (array_key_exists("BaseMachineCnt",$param) and $param["BaseMachineCnt"] !== null) {
            $this->BaseMachineCnt = $param["BaseMachineCnt"];
        }

        if (array_key_exists("SpecialtyMachineCnt",$param) and $param["SpecialtyMachineCnt"] !== null) {
            $this->SpecialtyMachineCnt = $param["SpecialtyMachineCnt"];
        }

        if (array_key_exists("FlagshipMachineCnt",$param) and $param["FlagshipMachineCnt"] !== null) {
            $this->FlagshipMachineCnt = $param["FlagshipMachineCnt"];
        }

        if (array_key_exists("RiskMachineCnt",$param) and $param["RiskMachineCnt"] !== null) {
            $this->RiskMachineCnt = $param["RiskMachineCnt"];
        }

        if (array_key_exists("CompareYesterdayRiskMachineCnt",$param) and $param["CompareYesterdayRiskMachineCnt"] !== null) {
            $this->CompareYesterdayRiskMachineCnt = $param["CompareYesterdayRiskMachineCnt"];
        }

        if (array_key_exists("CompareYesterdayNotProtectMachineCnt",$param) and $param["CompareYesterdayNotProtectMachineCnt"] !== null) {
            $this->CompareYesterdayNotProtectMachineCnt = $param["CompareYesterdayNotProtectMachineCnt"];
        }

        if (array_key_exists("CompareYesterdayDeadlineMachineCnt",$param) and $param["CompareYesterdayDeadlineMachineCnt"] !== null) {
            $this->CompareYesterdayDeadlineMachineCnt = $param["CompareYesterdayDeadlineMachineCnt"];
        }

        if (array_key_exists("DeadlineMachineCnt",$param) and $param["DeadlineMachineCnt"] !== null) {
            $this->DeadlineMachineCnt = $param["DeadlineMachineCnt"];
        }

        if (array_key_exists("NotProtectMachineCnt",$param) and $param["NotProtectMachineCnt"] !== null) {
            $this->NotProtectMachineCnt = $param["NotProtectMachineCnt"];
        }

        if (array_key_exists("LHGeneralDiscountCnt",$param) and $param["LHGeneralDiscountCnt"] !== null) {
            $this->LHGeneralDiscountCnt = $param["LHGeneralDiscountCnt"];
        }

        if (array_key_exists("CompareYesterdayMachineCnt",$param) and $param["CompareYesterdayMachineCnt"] !== null) {
            $this->CompareYesterdayMachineCnt = $param["CompareYesterdayMachineCnt"];
        }

        if (array_key_exists("MachineDestroyAfterOfflineHours",$param) and $param["MachineDestroyAfterOfflineHours"] !== null) {
            $this->MachineDestroyAfterOfflineHours = $param["MachineDestroyAfterOfflineHours"];
        }

        if (array_key_exists("CloudFrom",$param) and $param["CloudFrom"] !== null) {
            $this->CloudFrom = [];
            foreach ($param["CloudFrom"] as $key => $value){
                $obj = new CloudFromCnt();
                $obj->deserialize($value);
                array_push($this->CloudFrom, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
