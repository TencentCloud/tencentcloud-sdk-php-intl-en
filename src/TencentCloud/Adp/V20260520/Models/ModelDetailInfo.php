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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Model details
 *
 * @method string getAlias() Obtain Model alias.
 * @method void setAlias(string $Alias) Set Model alias.
 * @method integer getHistoryLimit() Obtain Limit on number of historical conversations
 * @method void setHistoryLimit(integer $HistoryLimit) Set Limit on number of historical conversations
 * @method string getModelId() Obtain Unique model ID
 * @method void setModelId(string $ModelId) Set Unique model ID
 * @method ModelParams getModelParams() Obtain Model parameters
 * @method void setModelParams(ModelParams $ModelParams) Set Model parameters
 */
class ModelDetailInfo extends AbstractModel
{
    /**
     * @var string Model alias.
     */
    public $Alias;

    /**
     * @var integer Limit on number of historical conversations
     */
    public $HistoryLimit;

    /**
     * @var string Unique model ID
     */
    public $ModelId;

    /**
     * @var ModelParams Model parameters
     */
    public $ModelParams;

    /**
     * @param string $Alias Model alias.
     * @param integer $HistoryLimit Limit on number of historical conversations
     * @param string $ModelId Unique model ID
     * @param ModelParams $ModelParams Model parameters
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("HistoryLimit",$param) and $param["HistoryLimit"] !== null) {
            $this->HistoryLimit = $param["HistoryLimit"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelParams",$param) and $param["ModelParams"] !== null) {
            $this->ModelParams = new ModelParams();
            $this->ModelParams->deserialize($param["ModelParams"]);
        }
    }
}
