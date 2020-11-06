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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration information of the queried output.
 *
 * @method string getOutputId() Obtain Output ID.
 * @method void setOutputId(string $OutputId) Set Output ID.
 * @method string getOutputName() Obtain Output name.
 * @method void setOutputName(string $OutputName) Set Output name.
 * @method string getOutputType() Obtain Output type.
 * @method void setOutputType(string $OutputType) Set Output type.
 * @method string getDescription() Obtain Output description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Output description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Output protocol.
 * @method void setProtocol(string $Protocol) Set Output protocol.
 * @method array getOutputAddressList() Obtain Output destination address information list.
 * @method void setOutputAddressList(array $OutputAddressList) Set Output destination address information list.
 * @method string getOutputRegion() Obtain Output region.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOutputRegion(string $OutputRegion) Set Output region.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method DescribeOutputSRTSettings getSRTSettings() Obtain SRT configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSRTSettings(DescribeOutputSRTSettings $SRTSettings) Set SRT configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method DescribeOutputRTPSettings getRTPSettings() Obtain RTP configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRTPSettings(DescribeOutputRTPSettings $RTPSettings) Set RTP configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method DescribeOutputRTMPSettings getRTMPSettings() Obtain RTMP configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRTMPSettings(DescribeOutputRTMPSettings $RTMPSettings) Set RTMP configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class DescribeOutput extends AbstractModel
{
    /**
     * @var string Output ID.
     */
    public $OutputId;

    /**
     * @var string Output name.
     */
    public $OutputName;

    /**
     * @var string Output type.
     */
    public $OutputType;

    /**
     * @var string Output description.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Output protocol.
     */
    public $Protocol;

    /**
     * @var array Output destination address information list.
     */
    public $OutputAddressList;

    /**
     * @var string Output region.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OutputRegion;

    /**
     * @var DescribeOutputSRTSettings SRT configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SRTSettings;

    /**
     * @var DescribeOutputRTPSettings RTP configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RTPSettings;

    /**
     * @var DescribeOutputRTMPSettings RTMP configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RTMPSettings;

    /**
     * @param string $OutputId Output ID.
     * @param string $OutputName Output name.
     * @param string $OutputType Output type.
     * @param string $Description Output description.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Output protocol.
     * @param array $OutputAddressList Output destination address information list.
     * @param string $OutputRegion Output region.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param DescribeOutputSRTSettings $SRTSettings SRT configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param DescribeOutputRTPSettings $RTPSettings RTP configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param DescribeOutputRTMPSettings $RTMPSettings RTMP configuration information of output.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("OutputId",$param) and $param["OutputId"] !== null) {
            $this->OutputId = $param["OutputId"];
        }

        if (array_key_exists("OutputName",$param) and $param["OutputName"] !== null) {
            $this->OutputName = $param["OutputName"];
        }

        if (array_key_exists("OutputType",$param) and $param["OutputType"] !== null) {
            $this->OutputType = $param["OutputType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("OutputAddressList",$param) and $param["OutputAddressList"] !== null) {
            $this->OutputAddressList = [];
            foreach ($param["OutputAddressList"] as $key => $value){
                $obj = new OutputAddress();
                $obj->deserialize($value);
                array_push($this->OutputAddressList, $obj);
            }
        }

        if (array_key_exists("OutputRegion",$param) and $param["OutputRegion"] !== null) {
            $this->OutputRegion = $param["OutputRegion"];
        }

        if (array_key_exists("SRTSettings",$param) and $param["SRTSettings"] !== null) {
            $this->SRTSettings = new DescribeOutputSRTSettings();
            $this->SRTSettings->deserialize($param["SRTSettings"]);
        }

        if (array_key_exists("RTPSettings",$param) and $param["RTPSettings"] !== null) {
            $this->RTPSettings = new DescribeOutputRTPSettings();
            $this->RTPSettings->deserialize($param["RTPSettings"]);
        }

        if (array_key_exists("RTMPSettings",$param) and $param["RTMPSettings"] !== null) {
            $this->RTMPSettings = new DescribeOutputRTMPSettings();
            $this->RTMPSettings->deserialize($param["RTMPSettings"]);
        }
    }
}
