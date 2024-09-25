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
namespace TencentCloud\Facefusion\V20220927\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitVideoFaceFusionJob request structure.
 *
 * @method string getProjectId() Obtain Activity ID. Check it in the video face fusion console.
 * @method void setProjectId(string $ProjectId) Set Activity ID. Check it in the video face fusion console.
 * @method string getModelId() Obtain Material ID. Check it in the video face fusion console.
 * @method void setModelId(string $ModelId) Set Material ID. Check it in the video face fusion console.
 * @method array getMergeInfos() Obtain Face position information on the user face image and material template image. Only one entry is allowed.
 * @method void setMergeInfos(array $MergeInfos) Set Face position information on the user face image and material template image. Only one entry is allowed.
 * @method integer getCelebrityIdentify() Obtain 0: inappropriate content recognition not required; 1: inappropriate content recognition required. Default value: 0.
Note: Once the inappropriate content recognition service is enabled, you need to decide whether to adjust your business logic based on the returned results. For example, you need to replace the image if the system informs you that the image does not meet the requirements.
**<font color=#1E90FF>Note: This field will be deprecated later due to business adjustments. It is not recommended for use.</font>**
 * @method void setCelebrityIdentify(integer $CelebrityIdentify) Set 0: inappropriate content recognition not required; 1: inappropriate content recognition required. Default value: 0.
Note: Once the inappropriate content recognition service is enabled, you need to decide whether to adjust your business logic based on the returned results. For example, you need to replace the image if the system informs you that the image does not meet the requirements.
**<font color=#1E90FF>Note: This field will be deprecated later due to business adjustments. It is not recommended for use.</font>**
 * @method LogoParam getLogoParam() Obtain Video watermark logo parameter
 * @method void setLogoParam(LogoParam $LogoParam) Set Video watermark logo parameter
 * @method string getUserDesignatedUrl() Obtain COS pre-signed URL (PUT method). If this parameter is specified, the video after fusion will be uploaded to this URL.
**<font color=#1E90FF>Note: If upload to this URL fails, the video will be uploaded to the default address of Tencent Cloud.</font>**
 * @method void setUserDesignatedUrl(string $UserDesignatedUrl) Set COS pre-signed URL (PUT method). If this parameter is specified, the video after fusion will be uploaded to this URL.
**<font color=#1E90FF>Note: If upload to this URL fails, the video will be uploaded to the default address of Tencent Cloud.</font>**
 * @method string getUserIp() Obtain User IP address
 * @method void setUserIp(string $UserIp) Set User IP address
 * @method array getMetaData() Obtain Video metadata field
 * @method void setMetaData(array $MetaData) Set Video metadata field
 */
class SubmitVideoFaceFusionJobRequest extends AbstractModel
{
    /**
     * @var string Activity ID. Check it in the video face fusion console.
     */
    public $ProjectId;

    /**
     * @var string Material ID. Check it in the video face fusion console.
     */
    public $ModelId;

    /**
     * @var array Face position information on the user face image and material template image. Only one entry is allowed.
     */
    public $MergeInfos;

    /**
     * @var integer 0: inappropriate content recognition not required; 1: inappropriate content recognition required. Default value: 0.
Note: Once the inappropriate content recognition service is enabled, you need to decide whether to adjust your business logic based on the returned results. For example, you need to replace the image if the system informs you that the image does not meet the requirements.
**<font color=#1E90FF>Note: This field will be deprecated later due to business adjustments. It is not recommended for use.</font>**
     */
    public $CelebrityIdentify;

    /**
     * @var LogoParam Video watermark logo parameter
     */
    public $LogoParam;

    /**
     * @var string COS pre-signed URL (PUT method). If this parameter is specified, the video after fusion will be uploaded to this URL.
**<font color=#1E90FF>Note: If upload to this URL fails, the video will be uploaded to the default address of Tencent Cloud.</font>**
     */
    public $UserDesignatedUrl;

    /**
     * @var string User IP address
     */
    public $UserIp;

    /**
     * @var array Video metadata field
     */
    public $MetaData;

    /**
     * @param string $ProjectId Activity ID. Check it in the video face fusion console.
     * @param string $ModelId Material ID. Check it in the video face fusion console.
     * @param array $MergeInfos Face position information on the user face image and material template image. Only one entry is allowed.
     * @param integer $CelebrityIdentify 0: inappropriate content recognition not required; 1: inappropriate content recognition required. Default value: 0.
Note: Once the inappropriate content recognition service is enabled, you need to decide whether to adjust your business logic based on the returned results. For example, you need to replace the image if the system informs you that the image does not meet the requirements.
**<font color=#1E90FF>Note: This field will be deprecated later due to business adjustments. It is not recommended for use.</font>**
     * @param LogoParam $LogoParam Video watermark logo parameter
     * @param string $UserDesignatedUrl COS pre-signed URL (PUT method). If this parameter is specified, the video after fusion will be uploaded to this URL.
**<font color=#1E90FF>Note: If upload to this URL fails, the video will be uploaded to the default address of Tencent Cloud.</font>**
     * @param string $UserIp User IP address
     * @param array $MetaData Video metadata field
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("MergeInfos",$param) and $param["MergeInfos"] !== null) {
            $this->MergeInfos = [];
            foreach ($param["MergeInfos"] as $key => $value){
                $obj = new MergeInfo();
                $obj->deserialize($value);
                array_push($this->MergeInfos, $obj);
            }
        }

        if (array_key_exists("CelebrityIdentify",$param) and $param["CelebrityIdentify"] !== null) {
            $this->CelebrityIdentify = $param["CelebrityIdentify"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }

        if (array_key_exists("UserDesignatedUrl",$param) and $param["UserDesignatedUrl"] !== null) {
            $this->UserDesignatedUrl = $param["UserDesignatedUrl"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = [];
            foreach ($param["MetaData"] as $key => $value){
                $obj = new MetaData();
                $obj->deserialize($value);
                array_push($this->MetaData, $obj);
            }
        }
    }
}
