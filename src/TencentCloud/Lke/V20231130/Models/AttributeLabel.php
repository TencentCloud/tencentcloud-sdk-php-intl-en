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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Label value.
 *
 * @method string getLabelBizId() Obtain Standard word ID.
 * @method void setLabelBizId(string $LabelBizId) Set Standard word ID.
 * @method string getLabelName() Obtain Standard word name.
 * @method void setLabelName(string $LabelName) Set Standard word name.
 * @method array getSimilarLabels() Obtain Synonym name.
 * @method void setSimilarLabels(array $SimilarLabels) Set Synonym name.
 */
class AttributeLabel extends AbstractModel
{
    /**
     * @var string Standard word ID.
     */
    public $LabelBizId;

    /**
     * @var string Standard word name.
     */
    public $LabelName;

    /**
     * @var array Synonym name.
     */
    public $SimilarLabels;

    /**
     * @param string $LabelBizId Standard word ID.
     * @param string $LabelName Standard word name.
     * @param array $SimilarLabels Synonym name.
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
        if (array_key_exists("LabelBizId",$param) and $param["LabelBizId"] !== null) {
            $this->LabelBizId = $param["LabelBizId"];
        }

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("SimilarLabels",$param) and $param["SimilarLabels"] !== null) {
            $this->SimilarLabels = $param["SimilarLabels"];
        }
    }
}
