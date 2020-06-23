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
 * CreateFace response structure.
 *
 * @method integer getSucFaceNum() Obtain Number of successfully added faces
 * @method void setSucFaceNum(integer $SucFaceNum) Set Number of successfully added faces
 * @method array getSucFaceIds() Obtain List of IDs of successfully added faces
 * @method void setSucFaceIds(array $SucFaceIds) Set List of IDs of successfully added faces
 * @method array getRetCode() Obtain Adding result for each face image. -1101: no face detected; -1102: image decoding failed; 
-1601: the image quality control requirement is not met; -1604: the face similarity is not above `FaceMatchThreshold`. 
Other non-zero values: algorithm service exception. 
The order of `RetCode` values is the same as the order of `Images` or `Urls` in the input parameter.
 * @method void setRetCode(array $RetCode) Set Adding result for each face image. -1101: no face detected; -1102: image decoding failed; 
-1601: the image quality control requirement is not met; -1604: the face similarity is not above `FaceMatchThreshold`. 
Other non-zero values: algorithm service exception. 
The order of `RetCode` values is the same as the order of `Images` or `Urls` in the input parameter.
 * @method array getSucIndexes() Obtain Indexes of successfully added faces. The order of indexes is the same as the order of `Images` or `Urls` in the input parameter. 
For example, if there are 3 URLs in `Urls`, and the second URL fails, then the value of `SucIndexes` will be [0,2].
 * @method void setSucIndexes(array $SucIndexes) Set Indexes of successfully added faces. The order of indexes is the same as the order of `Images` or `Urls` in the input parameter. 
For example, if there are 3 URLs in `Urls`, and the second URL fails, then the value of `SucIndexes` will be [0,2].
 * @method array getSucFaceRects() Obtain Frame positions of successfully added faces. The order is the same as the order of `Images` or `Urls` in the input parameter.
 * @method void setSucFaceRects(array $SucFaceRects) Set Frame positions of successfully added faces. The order is the same as the order of `Images` or `Urls` in the input parameter.
 * @method string getFaceModelVersion() Obtain Algorithm model version used for face recognition.
 * @method void setFaceModelVersion(string $FaceModelVersion) Set Algorithm model version used for face recognition.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateFaceResponse extends AbstractModel
{
    /**
     * @var integer Number of successfully added faces
     */
    public $SucFaceNum;

    /**
     * @var array List of IDs of successfully added faces
     */
    public $SucFaceIds;

    /**
     * @var array Adding result for each face image. -1101: no face detected; -1102: image decoding failed; 
-1601: the image quality control requirement is not met; -1604: the face similarity is not above `FaceMatchThreshold`. 
Other non-zero values: algorithm service exception. 
The order of `RetCode` values is the same as the order of `Images` or `Urls` in the input parameter.
     */
    public $RetCode;

    /**
     * @var array Indexes of successfully added faces. The order of indexes is the same as the order of `Images` or `Urls` in the input parameter. 
For example, if there are 3 URLs in `Urls`, and the second URL fails, then the value of `SucIndexes` will be [0,2].
     */
    public $SucIndexes;

    /**
     * @var array Frame positions of successfully added faces. The order is the same as the order of `Images` or `Urls` in the input parameter.
     */
    public $SucFaceRects;

    /**
     * @var string Algorithm model version used for face recognition.
     */
    public $FaceModelVersion;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $SucFaceNum Number of successfully added faces
     * @param array $SucFaceIds List of IDs of successfully added faces
     * @param array $RetCode Adding result for each face image. -1101: no face detected; -1102: image decoding failed; 
-1601: the image quality control requirement is not met; -1604: the face similarity is not above `FaceMatchThreshold`. 
Other non-zero values: algorithm service exception. 
The order of `RetCode` values is the same as the order of `Images` or `Urls` in the input parameter.
     * @param array $SucIndexes Indexes of successfully added faces. The order of indexes is the same as the order of `Images` or `Urls` in the input parameter. 
For example, if there are 3 URLs in `Urls`, and the second URL fails, then the value of `SucIndexes` will be [0,2].
     * @param array $SucFaceRects Frame positions of successfully added faces. The order is the same as the order of `Images` or `Urls` in the input parameter.
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
        if (array_key_exists("SucFaceNum",$param) and $param["SucFaceNum"] !== null) {
            $this->SucFaceNum = $param["SucFaceNum"];
        }

        if (array_key_exists("SucFaceIds",$param) and $param["SucFaceIds"] !== null) {
            $this->SucFaceIds = $param["SucFaceIds"];
        }

        if (array_key_exists("RetCode",$param) and $param["RetCode"] !== null) {
            $this->RetCode = $param["RetCode"];
        }

        if (array_key_exists("SucIndexes",$param) and $param["SucIndexes"] !== null) {
            $this->SucIndexes = $param["SucIndexes"];
        }

        if (array_key_exists("SucFaceRects",$param) and $param["SucFaceRects"] !== null) {
            $this->SucFaceRects = [];
            foreach ($param["SucFaceRects"] as $key => $value){
                $obj = new FaceRect();
                $obj->deserialize($value);
                array_push($this->SucFaceRects, $obj);
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
