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
 * SearchKnowledge request structure.
 *
 * @method SearchAdvancedConfig getAdvancedConfig() Obtain <p>Advanced search configuration</p>
 * @method void setAdvancedConfig(SearchAdvancedConfig $AdvancedConfig) Set <p>Advanced search configuration</p>
 * @method SearchInput getInput() Obtain <p>Retrieval input</p>
 * @method void setInput(SearchInput $Input) Set <p>Retrieval input</p>
 * @method SearchContext getContext() Obtain <p>Retrieval context</p>
 * @method void setContext(SearchContext $Context) Set <p>Retrieval context</p>
 * @method SearchBilling getSearchBilling() Obtain <p>Billing information</p>
 * @method void setSearchBilling(SearchBilling $SearchBilling) Set <p>Billing information</p>
 */
class SearchKnowledgeRequest extends AbstractModel
{
    /**
     * @var SearchAdvancedConfig <p>Advanced search configuration</p>
     */
    public $AdvancedConfig;

    /**
     * @var SearchInput <p>Retrieval input</p>
     */
    public $Input;

    /**
     * @var SearchContext <p>Retrieval context</p>
     */
    public $Context;

    /**
     * @var SearchBilling <p>Billing information</p>
     */
    public $SearchBilling;

    /**
     * @param SearchAdvancedConfig $AdvancedConfig <p>Advanced search configuration</p>
     * @param SearchInput $Input <p>Retrieval input</p>
     * @param SearchContext $Context <p>Retrieval context</p>
     * @param SearchBilling $SearchBilling <p>Billing information</p>
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
        if (array_key_exists("AdvancedConfig",$param) and $param["AdvancedConfig"] !== null) {
            $this->AdvancedConfig = new SearchAdvancedConfig();
            $this->AdvancedConfig->deserialize($param["AdvancedConfig"]);
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new SearchInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = new SearchContext();
            $this->Context->deserialize($param["Context"]);
        }

        if (array_key_exists("SearchBilling",$param) and $param["SearchBilling"] !== null) {
            $this->SearchBilling = new SearchBilling();
            $this->SearchBilling->deserialize($param["SearchBilling"]);
        }
    }
}
