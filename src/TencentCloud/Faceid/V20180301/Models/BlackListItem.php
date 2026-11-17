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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BlackListItem
 *
 * @method string getModelId() Obtain <p>Blocklist entry ID, customized by the customer when creating the entry, used to trace which entry is matched.</p>
 * @method void setModelId(string $ModelId) Set <p>Blocklist entry ID, customized by the customer when creating the entry, used to trace which entry is matched.</p>
 * @method string getModelType() Obtain <p>Entry type. Currently only face is supported.</p>
 * @method void setModelType(string $ModelType) Set <p>Entry type. Currently only face is supported.</p>
 * @method string getFaceScore() Obtain <p>Face similarity, expressed as a string with 4 decimal places, ranging from 0.0000 to 1.0000.</p>
 * @method void setFaceScore(string $FaceScore) Set <p>Face similarity, expressed as a string with 4 decimal places, ranging from 0.0000 to 1.0000.</p>
 * @method string getBackgroundScore() Obtain <p>Background similarity</p>
 * @method void setBackgroundScore(string $BackgroundScore) Set <p>Background similarity</p>
 */
class BlackListItem extends AbstractModel
{
    /**
     * @var string <p>Blocklist entry ID, customized by the customer when creating the entry, used to trace which entry is matched.</p>
     */
    public $ModelId;

    /**
     * @var string <p>Entry type. Currently only face is supported.</p>
     */
    public $ModelType;

    /**
     * @var string <p>Face similarity, expressed as a string with 4 decimal places, ranging from 0.0000 to 1.0000.</p>
     */
    public $FaceScore;

    /**
     * @var string <p>Background similarity</p>
     */
    public $BackgroundScore;

    /**
     * @param string $ModelId <p>Blocklist entry ID, customized by the customer when creating the entry, used to trace which entry is matched.</p>
     * @param string $ModelType <p>Entry type. Currently only face is supported.</p>
     * @param string $FaceScore <p>Face similarity, expressed as a string with 4 decimal places, ranging from 0.0000 to 1.0000.</p>
     * @param string $BackgroundScore <p>Background similarity</p>
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("FaceScore",$param) and $param["FaceScore"] !== null) {
            $this->FaceScore = $param["FaceScore"];
        }

        if (array_key_exists("BackgroundScore",$param) and $param["BackgroundScore"] !== null) {
            $this->BackgroundScore = $param["BackgroundScore"];
        }
    }
}
