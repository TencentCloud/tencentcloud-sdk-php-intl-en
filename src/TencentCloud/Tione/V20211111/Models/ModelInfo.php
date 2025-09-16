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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Model description information.
 *
 * @method string getModelVersionId() Obtain The model version ID is returned by the DescribeTrainingModelVersion API when querying the model.Enter the task ID of the Automated Machine Learning (AutoML) model.
 * @method void setModelVersionId(string $ModelVersionId) Set The model version ID is returned by the DescribeTrainingModelVersion API when querying the model.Enter the task ID of the Automated Machine Learning (AutoML) model.
 * @method string getModelId() Obtain Model ID.
 * @method void setModelId(string $ModelId) Set Model ID.
 * @method string getModelName() Obtain Model name.
 * @method void setModelName(string $ModelName) Set Model name.
 * @method string getModelVersion() Obtain Model version.
 * @method void setModelVersion(string $ModelVersion) Set Model version.
 * @method string getModelSource() Obtain Model source.
 * @method void setModelSource(string $ModelSource) Set Model source.
 * @method CosPathInfo getCosPathInfo() Obtain COS path information.
 * @method void setCosPathInfo(CosPathInfo $CosPathInfo) Set COS path information.
 * @method GooseFSx getGooseFSx() Obtain GooseFSx configurations, and is valid when ModelSource is GooseFSx.
 * @method void setGooseFSx(GooseFSx $GooseFSx) Set GooseFSx configurations, and is valid when ModelSource is GooseFSx.
 * @method string getAlgorithmFramework() Obtain Algorithm framework corresponding to the model (reserved field).Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlgorithmFramework(string $AlgorithmFramework) Set Algorithm framework corresponding to the model (reserved field).Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModelType() Obtain Default: NORMAL; accelerated model: ACCELERATE; automatic learning model: AUTO_ML.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModelType(string $ModelType) Set Default: NORMAL; accelerated model: ACCELERATE; automatic learning model: AUTO_ML.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModelFormat() Obtain Model format.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModelFormat(string $ModelFormat) Set Model format.Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsPrivateModel() Obtain Whether it is a private LLM.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsPrivateModel(boolean $IsPrivateModel) Set Whether it is a private LLM.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModelCategory() Obtain Model category. Valid values: MultiModal (multi-modal) and LLM (text LLM).
 * @method void setModelCategory(string $ModelCategory) Set Model category. Valid values: MultiModal (multi-modal) and LLM (text LLM).
 * @method PublicDataSourceFS getPublicDataSource() Obtain Data source configurations.
 * @method void setPublicDataSource(PublicDataSourceFS $PublicDataSource) Set Data source configurations.
 */
class ModelInfo extends AbstractModel
{
    /**
     * @var string The model version ID is returned by the DescribeTrainingModelVersion API when querying the model.Enter the task ID of the Automated Machine Learning (AutoML) model.
     */
    public $ModelVersionId;

    /**
     * @var string Model ID.
     */
    public $ModelId;

    /**
     * @var string Model name.
     */
    public $ModelName;

    /**
     * @var string Model version.
     */
    public $ModelVersion;

    /**
     * @var string Model source.
     */
    public $ModelSource;

    /**
     * @var CosPathInfo COS path information.
     */
    public $CosPathInfo;

    /**
     * @var GooseFSx GooseFSx configurations, and is valid when ModelSource is GooseFSx.
     */
    public $GooseFSx;

    /**
     * @var string Algorithm framework corresponding to the model (reserved field).Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlgorithmFramework;

    /**
     * @var string Default: NORMAL; accelerated model: ACCELERATE; automatic learning model: AUTO_ML.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModelType;

    /**
     * @var string Model format.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ModelFormat;

    /**
     * @var boolean Whether it is a private LLM.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsPrivateModel;

    /**
     * @var string Model category. Valid values: MultiModal (multi-modal) and LLM (text LLM).
     */
    public $ModelCategory;

    /**
     * @var PublicDataSourceFS Data source configurations.
     */
    public $PublicDataSource;

    /**
     * @param string $ModelVersionId The model version ID is returned by the DescribeTrainingModelVersion API when querying the model.Enter the task ID of the Automated Machine Learning (AutoML) model.
     * @param string $ModelId Model ID.
     * @param string $ModelName Model name.
     * @param string $ModelVersion Model version.
     * @param string $ModelSource Model source.
     * @param CosPathInfo $CosPathInfo COS path information.
     * @param GooseFSx $GooseFSx GooseFSx configurations, and is valid when ModelSource is GooseFSx.
     * @param string $AlgorithmFramework Algorithm framework corresponding to the model (reserved field).Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModelType Default: NORMAL; accelerated model: ACCELERATE; automatic learning model: AUTO_ML.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModelFormat Model format.Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsPrivateModel Whether it is a private LLM.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModelCategory Model category. Valid values: MultiModal (multi-modal) and LLM (text LLM).
     * @param PublicDataSourceFS $PublicDataSource Data source configurations.
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
        if (array_key_exists("ModelVersionId",$param) and $param["ModelVersionId"] !== null) {
            $this->ModelVersionId = $param["ModelVersionId"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("ModelSource",$param) and $param["ModelSource"] !== null) {
            $this->ModelSource = $param["ModelSource"];
        }

        if (array_key_exists("CosPathInfo",$param) and $param["CosPathInfo"] !== null) {
            $this->CosPathInfo = new CosPathInfo();
            $this->CosPathInfo->deserialize($param["CosPathInfo"]);
        }

        if (array_key_exists("GooseFSx",$param) and $param["GooseFSx"] !== null) {
            $this->GooseFSx = new GooseFSx();
            $this->GooseFSx->deserialize($param["GooseFSx"]);
        }

        if (array_key_exists("AlgorithmFramework",$param) and $param["AlgorithmFramework"] !== null) {
            $this->AlgorithmFramework = $param["AlgorithmFramework"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("ModelFormat",$param) and $param["ModelFormat"] !== null) {
            $this->ModelFormat = $param["ModelFormat"];
        }

        if (array_key_exists("IsPrivateModel",$param) and $param["IsPrivateModel"] !== null) {
            $this->IsPrivateModel = $param["IsPrivateModel"];
        }

        if (array_key_exists("ModelCategory",$param) and $param["ModelCategory"] !== null) {
            $this->ModelCategory = $param["ModelCategory"];
        }

        if (array_key_exists("PublicDataSource",$param) and $param["PublicDataSource"] !== null) {
            $this->PublicDataSource = new PublicDataSourceFS();
            $this->PublicDataSource->deserialize($param["PublicDataSource"]);
        }
    }
}
