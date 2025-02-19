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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getSourceContent() Obtain 
 * @method void setSourceContent(string $SourceContent) Set 
 * @method string getSourceType() Obtain 
 * @method void setSourceType(string $SourceType) Set 
 * @method string getDestContent() Obtain 
 * @method void setDestContent(string $DestContent) Set 
 * @method string getDestType() Obtain 
 * @method void setDestType(string $DestType) Set 
 * @method string getProtocol() Obtain 
 * @method void setProtocol(string $Protocol) Set 
 * @method string getRuleAction() Obtain 
 * @method void setRuleAction(string $RuleAction) Set 
 * @method string getPort() Obtain 
 * @method void setPort(string $Port) Set 
 * @method string getDescription() Obtain 
 * @method void setDescription(string $Description) Set 
 * @method integer getOrderIndex() Obtain 
 * @method void setOrderIndex(integer $OrderIndex) Set 
 * @method string getEnable() Obtain 
 * @method void setEnable(string $Enable) Set 
 * @method string getEdgeId() Obtain 
 * @method void setEdgeId(string $EdgeId) Set 
 * @method integer getUuid() Obtain 
 * @method void setUuid(integer $Uuid) Set 
 * @method integer getDetectedTimes() Obtain 
 * @method void setDetectedTimes(integer $DetectedTimes) Set 
 * @method string getEdgeName() Obtain 
 * @method void setEdgeName(string $EdgeName) Set 
 * @method integer getInternalUuid() Obtain 
 * @method void setInternalUuid(integer $InternalUuid) Set 
 * @method integer getDeleted() Obtain 
 * @method void setDeleted(integer $Deleted) Set 
 * @method string getFwGroupId() Obtain 
 * @method void setFwGroupId(string $FwGroupId) Set 
 * @method string getFwGroupName() Obtain 
 * @method void setFwGroupName(string $FwGroupName) Set 
 * @method array getBetaList() Obtain 
 * @method void setBetaList(array $BetaList) Set 
 * @method string getParamTemplateId() Obtain 
 * @method void setParamTemplateId(string $ParamTemplateId) Set 
 * @method string getParamTemplateName() Obtain 
 * @method void setParamTemplateName(string $ParamTemplateName) Set 
 * @method string getTargetName() Obtain 
 * @method void setTargetName(string $TargetName) Set 
 * @method string getSourceName() Obtain 
 * @method void setSourceName(string $SourceName) Set 
 * @method integer getIpVersion() Obtain 
 * @method void setIpVersion(integer $IpVersion) Set 
 * @method integer getInvalid() Obtain 
 * @method void setInvalid(integer $Invalid) Set 
 */
class VpcRuleItem extends AbstractModel
{
    /**
     * @var string 
     */
    public $SourceContent;

    /**
     * @var string 
     */
    public $SourceType;

    /**
     * @var string 
     */
    public $DestContent;

    /**
     * @var string 
     */
    public $DestType;

    /**
     * @var string 
     */
    public $Protocol;

    /**
     * @var string 
     */
    public $RuleAction;

    /**
     * @var string 
     */
    public $Port;

    /**
     * @var string 
     */
    public $Description;

    /**
     * @var integer 
     */
    public $OrderIndex;

    /**
     * @var string 
     */
    public $Enable;

    /**
     * @var string 
     */
    public $EdgeId;

    /**
     * @var integer 
     */
    public $Uuid;

    /**
     * @var integer 
     */
    public $DetectedTimes;

    /**
     * @var string 
     */
    public $EdgeName;

    /**
     * @var integer 
     */
    public $InternalUuid;

    /**
     * @var integer 
     */
    public $Deleted;

    /**
     * @var string 
     */
    public $FwGroupId;

    /**
     * @var string 
     */
    public $FwGroupName;

    /**
     * @var array 
     */
    public $BetaList;

    /**
     * @var string 
     */
    public $ParamTemplateId;

    /**
     * @var string 
     */
    public $ParamTemplateName;

    /**
     * @var string 
     */
    public $TargetName;

    /**
     * @var string 
     */
    public $SourceName;

    /**
     * @var integer 
     */
    public $IpVersion;

    /**
     * @var integer 
     */
    public $Invalid;

    /**
     * @param string $SourceContent 
     * @param string $SourceType 
     * @param string $DestContent 
     * @param string $DestType 
     * @param string $Protocol 
     * @param string $RuleAction 
     * @param string $Port 
     * @param string $Description 
     * @param integer $OrderIndex 
     * @param string $Enable 
     * @param string $EdgeId 
     * @param integer $Uuid 
     * @param integer $DetectedTimes 
     * @param string $EdgeName 
     * @param integer $InternalUuid 
     * @param integer $Deleted 
     * @param string $FwGroupId 
     * @param string $FwGroupName 
     * @param array $BetaList 
     * @param string $ParamTemplateId 
     * @param string $ParamTemplateName 
     * @param string $TargetName 
     * @param string $SourceName 
     * @param integer $IpVersion 
     * @param integer $Invalid 
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
        if (array_key_exists("SourceContent",$param) and $param["SourceContent"] !== null) {
            $this->SourceContent = $param["SourceContent"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("DestContent",$param) and $param["DestContent"] !== null) {
            $this->DestContent = $param["DestContent"];
        }

        if (array_key_exists("DestType",$param) and $param["DestType"] !== null) {
            $this->DestType = $param["DestType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("DetectedTimes",$param) and $param["DetectedTimes"] !== null) {
            $this->DetectedTimes = $param["DetectedTimes"];
        }

        if (array_key_exists("EdgeName",$param) and $param["EdgeName"] !== null) {
            $this->EdgeName = $param["EdgeName"];
        }

        if (array_key_exists("InternalUuid",$param) and $param["InternalUuid"] !== null) {
            $this->InternalUuid = $param["InternalUuid"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }

        if (array_key_exists("FwGroupId",$param) and $param["FwGroupId"] !== null) {
            $this->FwGroupId = $param["FwGroupId"];
        }

        if (array_key_exists("FwGroupName",$param) and $param["FwGroupName"] !== null) {
            $this->FwGroupName = $param["FwGroupName"];
        }

        if (array_key_exists("BetaList",$param) and $param["BetaList"] !== null) {
            $this->BetaList = [];
            foreach ($param["BetaList"] as $key => $value){
                $obj = new BetaInfoByACL();
                $obj->deserialize($value);
                array_push($this->BetaList, $obj);
            }
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("ParamTemplateName",$param) and $param["ParamTemplateName"] !== null) {
            $this->ParamTemplateName = $param["ParamTemplateName"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("Invalid",$param) and $param["Invalid"] !== null) {
            $this->Invalid = $param["Invalid"];
        }
    }
}
