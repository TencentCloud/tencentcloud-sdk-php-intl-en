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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyStreamPackageChannelEndpoint request structure.
 *
 * @method string getId() Obtain Channel ID
 * @method void setId(string $Id) Set Channel ID
 * @method string getUrl() Obtain Channel endpoint URL
 * @method void setUrl(string $Url) Set Channel endpoint URL
 * @method string getName() Obtain New endpoint name
 * @method void setName(string $Name) Set New endpoint name
 * @method EndpointAuthInfo getAuthInfo() Obtain New channel authentication information
 * @method void setAuthInfo(EndpointAuthInfo $AuthInfo) Set New channel authentication information
 * @method string getProtocol() Obtain Endpoint protocol.
 * @method void setProtocol(string $Protocol) Set Endpoint protocol.
 * @method boolean getTimeShiftEnable() Obtain Whether to turn on the time shift function, true: on, false: off, the default is off.
 * @method void setTimeShiftEnable(boolean $TimeShiftEnable) Set Whether to turn on the time shift function, true: on, false: off, the default is off.
 * @method integer getTimeShiftDuration() Obtain The number of days in the time shift window, up to 30 days. Valid when TimeShiftEnable is turned on.
 * @method void setTimeShiftDuration(integer $TimeShiftDuration) Set The number of days in the time shift window, up to 30 days. Valid when TimeShiftEnable is turned on.
 * @method boolean getSSAIEnable() Obtain Advertising insertion function switch.
 * @method void setSSAIEnable(boolean $SSAIEnable) Set Advertising insertion function switch.
 * @method SSAIConf getSSAIInfo() Obtain Ad insertion function configuration information. Valid when SSAIEnable is turned on.
 * @method void setSSAIInfo(SSAIConf $SSAIInfo) Set Ad insertion function configuration information. Valid when SSAIEnable is turned on.
 * @method integer getCustomUrlParamIndex() Obtain The customer-defined url parameter is inserted into the subscript at the specified position of the Endpoint url. 
Calculation starts from the first '/' in the url path, and the subscript starts from 0, the optional range of the subscript is: [0,3].
 * @method void setCustomUrlParamIndex(integer $CustomUrlParamIndex) Set The customer-defined url parameter is inserted into the subscript at the specified position of the Endpoint url. 
Calculation starts from the first '/' in the url path, and the subscript starts from 0, the optional range of the subscript is: [0,3].
 * @method string getCustomUrlParam() Obtain Customer-defined url parameters are inserted into the specified position of the Endpoint url based on the CustomUrlParamIndex.
The parameters can only contain digits, letters, underscores (_), and hyphens (-), with a length of 1 to 64 chars.
 * @method void setCustomUrlParam(string $CustomUrlParam) Set Customer-defined url parameters are inserted into the specified position of the Endpoint url based on the CustomUrlParamIndex.
The parameters can only contain digits, letters, underscores (_), and hyphens (-), with a length of 1 to 64 chars.
 */
class ModifyStreamPackageChannelEndpointRequest extends AbstractModel
{
    /**
     * @var string Channel ID
     */
    public $Id;

    /**
     * @var string Channel endpoint URL
     */
    public $Url;

    /**
     * @var string New endpoint name
     */
    public $Name;

    /**
     * @var EndpointAuthInfo New channel authentication information
     */
    public $AuthInfo;

    /**
     * @var string Endpoint protocol.
     */
    public $Protocol;

    /**
     * @var boolean Whether to turn on the time shift function, true: on, false: off, the default is off.
     */
    public $TimeShiftEnable;

    /**
     * @var integer The number of days in the time shift window, up to 30 days. Valid when TimeShiftEnable is turned on.
     */
    public $TimeShiftDuration;

    /**
     * @var boolean Advertising insertion function switch.
     */
    public $SSAIEnable;

    /**
     * @var SSAIConf Ad insertion function configuration information. Valid when SSAIEnable is turned on.
     */
    public $SSAIInfo;

    /**
     * @var integer The customer-defined url parameter is inserted into the subscript at the specified position of the Endpoint url. 
Calculation starts from the first '/' in the url path, and the subscript starts from 0, the optional range of the subscript is: [0,3].
     */
    public $CustomUrlParamIndex;

    /**
     * @var string Customer-defined url parameters are inserted into the specified position of the Endpoint url based on the CustomUrlParamIndex.
The parameters can only contain digits, letters, underscores (_), and hyphens (-), with a length of 1 to 64 chars.
     */
    public $CustomUrlParam;

    /**
     * @param string $Id Channel ID
     * @param string $Url Channel endpoint URL
     * @param string $Name New endpoint name
     * @param EndpointAuthInfo $AuthInfo New channel authentication information
     * @param string $Protocol Endpoint protocol.
     * @param boolean $TimeShiftEnable Whether to turn on the time shift function, true: on, false: off, the default is off.
     * @param integer $TimeShiftDuration The number of days in the time shift window, up to 30 days. Valid when TimeShiftEnable is turned on.
     * @param boolean $SSAIEnable Advertising insertion function switch.
     * @param SSAIConf $SSAIInfo Ad insertion function configuration information. Valid when SSAIEnable is turned on.
     * @param integer $CustomUrlParamIndex The customer-defined url parameter is inserted into the subscript at the specified position of the Endpoint url. 
Calculation starts from the first '/' in the url path, and the subscript starts from 0, the optional range of the subscript is: [0,3].
     * @param string $CustomUrlParam Customer-defined url parameters are inserted into the specified position of the Endpoint url based on the CustomUrlParamIndex.
The parameters can only contain digits, letters, underscores (_), and hyphens (-), with a length of 1 to 64 chars.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AuthInfo",$param) and $param["AuthInfo"] !== null) {
            $this->AuthInfo = new EndpointAuthInfo();
            $this->AuthInfo->deserialize($param["AuthInfo"]);
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("TimeShiftEnable",$param) and $param["TimeShiftEnable"] !== null) {
            $this->TimeShiftEnable = $param["TimeShiftEnable"];
        }

        if (array_key_exists("TimeShiftDuration",$param) and $param["TimeShiftDuration"] !== null) {
            $this->TimeShiftDuration = $param["TimeShiftDuration"];
        }

        if (array_key_exists("SSAIEnable",$param) and $param["SSAIEnable"] !== null) {
            $this->SSAIEnable = $param["SSAIEnable"];
        }

        if (array_key_exists("SSAIInfo",$param) and $param["SSAIInfo"] !== null) {
            $this->SSAIInfo = new SSAIConf();
            $this->SSAIInfo->deserialize($param["SSAIInfo"]);
        }

        if (array_key_exists("CustomUrlParamIndex",$param) and $param["CustomUrlParamIndex"] !== null) {
            $this->CustomUrlParamIndex = $param["CustomUrlParamIndex"];
        }

        if (array_key_exists("CustomUrlParam",$param) and $param["CustomUrlParam"] !== null) {
            $this->CustomUrlParam = $param["CustomUrlParam"];
        }
    }
}
