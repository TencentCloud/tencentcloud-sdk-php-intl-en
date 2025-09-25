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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TensorFlow, Pytorch, SK-learn image information list.
 *
 * @method string getSparkImageId() Obtain Specifies the unique id of the Spark mirror.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSparkImageId(string $SparkImageId) Set Specifies the unique id of the Spark mirror.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSparkImageVersion() Obtain Spark image version name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSparkImageVersion(string $SparkImageVersion) Set Spark image version name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSparkImageType() Obtain Minor version image type. 1: TensorFlow, 2: Pytorch, 3: SK-learn.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSparkImageType(integer $SparkImageType) Set Minor version image type. 1: TensorFlow, 2: Pytorch, 3: SK-learn.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSparkImageTag() Obtain Image address.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSparkImageTag(string $SparkImageTag) Set Image address.

Note: This field may return null, indicating that no valid values can be obtained.
 */
class EngineSessionImage extends AbstractModel
{
    /**
     * @var string Specifies the unique id of the Spark mirror.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SparkImageId;

    /**
     * @var string Spark image version name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SparkImageVersion;

    /**
     * @var integer Minor version image type. 1: TensorFlow, 2: Pytorch, 3: SK-learn.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SparkImageType;

    /**
     * @var string Image address.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SparkImageTag;

    /**
     * @param string $SparkImageId Specifies the unique id of the Spark mirror.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SparkImageVersion Spark image version name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SparkImageType Minor version image type. 1: TensorFlow, 2: Pytorch, 3: SK-learn.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SparkImageTag Image address.

Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("SparkImageId",$param) and $param["SparkImageId"] !== null) {
            $this->SparkImageId = $param["SparkImageId"];
        }

        if (array_key_exists("SparkImageVersion",$param) and $param["SparkImageVersion"] !== null) {
            $this->SparkImageVersion = $param["SparkImageVersion"];
        }

        if (array_key_exists("SparkImageType",$param) and $param["SparkImageType"] !== null) {
            $this->SparkImageType = $param["SparkImageType"];
        }

        if (array_key_exists("SparkImageTag",$param) and $param["SparkImageTag"] !== null) {
            $this->SparkImageTag = $param["SparkImageTag"];
        }
    }
}
