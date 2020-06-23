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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetectFace response structure.
 *
 * @method integer getImageWidth() Obtain Width of requested image.
 * @method void setImageWidth(integer $ImageWidth) Set Width of requested image.
 * @method integer getImageHeight() Obtain Height of requested image.
 * @method void setImageHeight(integer $ImageHeight) Set Height of requested image.
 * @method array getFaceInfos() Obtain Face information list, including face coordinate information, attribute information (if needed), and quality score information (if needed).
 * @method void setFaceInfos(array $FaceInfos) Set Face information list, including face coordinate information, attribute information (if needed), and quality score information (if needed).
 * @method string getFaceModelVersion() Obtain Algorithm model version used for face recognition.
 * @method void setFaceModelVersion(string $FaceModelVersion) Set Algorithm model version used for face recognition.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DetectFaceResponse extends AbstractModel
{
    /**
     * @var integer Width of requested image.
     */
    public $ImageWidth;

    /**
     * @var integer Height of requested image.
     */
    public $ImageHeight;

    /**
     * @var array Face information list, including face coordinate information, attribute information (if needed), and quality score information (if needed).
     */
    public $FaceInfos;

    /**
     * @var string Algorithm model version used for face recognition.
     */
    public $FaceModelVersion;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ImageWidth Width of requested image.
     * @param integer $ImageHeight Height of requested image.
     * @param array $FaceInfos Face information list, including face coordinate information, attribute information (if needed), and quality score information (if needed).
     * @param string $FaceModelVersion Algorithm model version used for face recognition.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ImageWidth",$param) and $param["ImageWidth"] !== null) {
            $this->ImageWidth = $param["ImageWidth"];
        }

        if (array_key_exists("ImageHeight",$param) and $param["ImageHeight"] !== null) {
            $this->ImageHeight = $param["ImageHeight"];
        }

        if (array_key_exists("FaceInfos",$param) and $param["FaceInfos"] !== null) {
            $this->FaceInfos = [];
            foreach ($param["FaceInfos"] as $key => $value){
                $obj = new FaceInfo();
                $obj->deserialize($value);
                array_push($this->FaceInfos, $obj);
            }
        }

        if (array_key_exists("FaceModelVersion",$param) and $param["FaceModelVersion"] !== null) {
            $this->FaceModelVersion = $param["FaceModelVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
