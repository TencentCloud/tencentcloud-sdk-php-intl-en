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
 * Optional retrieval configuration
 *
 * @method ExpirationAwareness getExpirationAwareness() Obtain <p>Timeliness retrieval enhancement configuration</p>
 * @method void setExpirationAwareness(ExpirationAwareness $ExpirationAwareness) Set <p>Timeliness retrieval enhancement configuration</p>
 * @method GraphRAG getGraphRag() Obtain <p>GraphRAG Configuration</p>
 * @method void setGraphRag(GraphRAG $GraphRag) Set <p>GraphRAG Configuration</p>
 * @method TableEnhancement getTableEnhancement() Obtain <p>Spreadsheet enhancement configuration</p>
 * @method void setTableEnhancement(TableEnhancement $TableEnhancement) Set <p>Spreadsheet enhancement configuration</p>
 */
class RetrievalOption extends AbstractModel
{
    /**
     * @var ExpirationAwareness <p>Timeliness retrieval enhancement configuration</p>
     */
    public $ExpirationAwareness;

    /**
     * @var GraphRAG <p>GraphRAG Configuration</p>
     */
    public $GraphRag;

    /**
     * @var TableEnhancement <p>Spreadsheet enhancement configuration</p>
     */
    public $TableEnhancement;

    /**
     * @param ExpirationAwareness $ExpirationAwareness <p>Timeliness retrieval enhancement configuration</p>
     * @param GraphRAG $GraphRag <p>GraphRAG Configuration</p>
     * @param TableEnhancement $TableEnhancement <p>Spreadsheet enhancement configuration</p>
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
        if (array_key_exists("ExpirationAwareness",$param) and $param["ExpirationAwareness"] !== null) {
            $this->ExpirationAwareness = new ExpirationAwareness();
            $this->ExpirationAwareness->deserialize($param["ExpirationAwareness"]);
        }

        if (array_key_exists("GraphRag",$param) and $param["GraphRag"] !== null) {
            $this->GraphRag = new GraphRAG();
            $this->GraphRag->deserialize($param["GraphRag"]);
        }

        if (array_key_exists("TableEnhancement",$param) and $param["TableEnhancement"] !== null) {
            $this->TableEnhancement = new TableEnhancement();
            $this->TableEnhancement->deserialize($param["TableEnhancement"]);
        }
    }
}
