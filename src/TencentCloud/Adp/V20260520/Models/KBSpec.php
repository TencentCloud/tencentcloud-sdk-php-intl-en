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
 * Collection of writable attributes of the knowledge base (used in conjunction with update_mask)
 *
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method ESConfig getEsConfig() Obtain <p>ES configuration</p>
 * @method void setEsConfig(ESConfig $EsConfig) Set <p>ES configuration</p>
 * @method KBModelConfig getModelConfig() Obtain <p>Model configuration</p>
 * @method void setModelConfig(KBModelConfig $ModelConfig) Set <p>Model configuration</p>
 * @method string getName() Obtain <p>Knowledge base name</p>
 * @method void setName(string $Name) Set <p>Knowledge base name</p>
 * @method string getOwnerId() Obtain <p>Owner ID</p>
 * @method void setOwnerId(string $OwnerId) Set <p>Owner ID</p>
 */
class KBSpec extends AbstractModel
{
    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var ESConfig <p>ES configuration</p>
     */
    public $EsConfig;

    /**
     * @var KBModelConfig <p>Model configuration</p>
     */
    public $ModelConfig;

    /**
     * @var string <p>Knowledge base name</p>
     */
    public $Name;

    /**
     * @var string <p>Owner ID</p>
     */
    public $OwnerId;

    /**
     * @param string $Description <p>Description.</p>
     * @param ESConfig $EsConfig <p>ES configuration</p>
     * @param KBModelConfig $ModelConfig <p>Model configuration</p>
     * @param string $Name <p>Knowledge base name</p>
     * @param string $OwnerId <p>Owner ID</p>
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EsConfig",$param) and $param["EsConfig"] !== null) {
            $this->EsConfig = new ESConfig();
            $this->EsConfig->deserialize($param["EsConfig"]);
        }

        if (array_key_exists("ModelConfig",$param) and $param["ModelConfig"] !== null) {
            $this->ModelConfig = new KBModelConfig();
            $this->ModelConfig->deserialize($param["ModelConfig"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }
    }
}
