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
 * Retrieval request context info
 *
 * @method integer getCallSource() Obtain <p>Request source<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>CALL_SOURCE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>CALL_SOURCE_RAG</td><td>1</td><td>Standard mode</td></tr><tr><td>CALL_SOURCE_WORKFLOW</td><td>2</td><td>Workflow</td></tr><tr><td>CALL_SOURCE_PLUGIN</td><td>3</td><td>Plug-in</td></tr><tr><td>CALL_SOURCE_OPENCLAW</td><td>4</td><td>openclaw</td></tr><tr><td>CALL_SOURCE_RECALL_TEST</td><td>5</td><td>Recall test</td></tr><tr><td>CALL_SOURCE_RECALL_TEST_DIFF</td><td>6</td><td>Recall test in comparison scenarios also needs to trigger the retrieval interface. The difference is that in this case, the frontend does not need to update the latest configuration. Because when comparing 1, 2, and 3, the final saved one may be 2.</td></tr></tbody></table></p>
 * @method void setCallSource(integer $CallSource) Set <p>Request source<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>CALL_SOURCE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>CALL_SOURCE_RAG</td><td>1</td><td>Standard mode</td></tr><tr><td>CALL_SOURCE_WORKFLOW</td><td>2</td><td>Workflow</td></tr><tr><td>CALL_SOURCE_PLUGIN</td><td>3</td><td>Plug-in</td></tr><tr><td>CALL_SOURCE_OPENCLAW</td><td>4</td><td>openclaw</td></tr><tr><td>CALL_SOURCE_RECALL_TEST</td><td>5</td><td>Recall test</td></tr><tr><td>CALL_SOURCE_RECALL_TEST_DIFF</td><td>6</td><td>Recall test in comparison scenarios also needs to trigger the retrieval interface. The difference is that in this case, the frontend does not need to update the latest configuration. Because when comparing 1, 2, and 3, the final saved one may be 2.</td></tr></tbody></table></p>
 * @method integer getDomain() Obtain <p>adp DOMAIN: 1=development DOMAIN, 2=production DOMAIN<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>adp_DOMAIN_UNSPECIFIED</td><td>0</td><td>not specified</td></tr><tr><td>adp_DOMAIN_DEV</td><td>1</td><td>development DOMAIN</td></tr><tr><td>adp_DOMAIN_PROD</td><td>2</td><td>production DOMAIN</td></tr></tbody></table></p>
 * @method void setDomain(integer $Domain) Set <p>adp DOMAIN: 1=development DOMAIN, 2=production DOMAIN<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>adp_DOMAIN_UNSPECIFIED</td><td>0</td><td>not specified</td></tr><tr><td>adp_DOMAIN_DEV</td><td>1</td><td>development DOMAIN</td></tr><tr><td>adp_DOMAIN_PROD</td><td>2</td><td>production DOMAIN</td></tr></tbody></table></p>
 * @method string getVisitorId() Obtain <p>Visitor ID</p>
 * @method void setVisitorId(string $VisitorId) Set <p>Visitor ID</p>
 */
class SearchContext extends AbstractModel
{
    /**
     * @var integer <p>Request source<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>CALL_SOURCE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>CALL_SOURCE_RAG</td><td>1</td><td>Standard mode</td></tr><tr><td>CALL_SOURCE_WORKFLOW</td><td>2</td><td>Workflow</td></tr><tr><td>CALL_SOURCE_PLUGIN</td><td>3</td><td>Plug-in</td></tr><tr><td>CALL_SOURCE_OPENCLAW</td><td>4</td><td>openclaw</td></tr><tr><td>CALL_SOURCE_RECALL_TEST</td><td>5</td><td>Recall test</td></tr><tr><td>CALL_SOURCE_RECALL_TEST_DIFF</td><td>6</td><td>Recall test in comparison scenarios also needs to trigger the retrieval interface. The difference is that in this case, the frontend does not need to update the latest configuration. Because when comparing 1, 2, and 3, the final saved one may be 2.</td></tr></tbody></table></p>
     */
    public $CallSource;

    /**
     * @var integer <p>adp DOMAIN: 1=development DOMAIN, 2=production DOMAIN<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>adp_DOMAIN_UNSPECIFIED</td><td>0</td><td>not specified</td></tr><tr><td>adp_DOMAIN_DEV</td><td>1</td><td>development DOMAIN</td></tr><tr><td>adp_DOMAIN_PROD</td><td>2</td><td>production DOMAIN</td></tr></tbody></table></p>
     */
    public $Domain;

    /**
     * @var string <p>Visitor ID</p>
     */
    public $VisitorId;

    /**
     * @param integer $CallSource <p>Request source<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>CALL_SOURCE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>CALL_SOURCE_RAG</td><td>1</td><td>Standard mode</td></tr><tr><td>CALL_SOURCE_WORKFLOW</td><td>2</td><td>Workflow</td></tr><tr><td>CALL_SOURCE_PLUGIN</td><td>3</td><td>Plug-in</td></tr><tr><td>CALL_SOURCE_OPENCLAW</td><td>4</td><td>openclaw</td></tr><tr><td>CALL_SOURCE_RECALL_TEST</td><td>5</td><td>Recall test</td></tr><tr><td>CALL_SOURCE_RECALL_TEST_DIFF</td><td>6</td><td>Recall test in comparison scenarios also needs to trigger the retrieval interface. The difference is that in this case, the frontend does not need to update the latest configuration. Because when comparing 1, 2, and 3, the final saved one may be 2.</td></tr></tbody></table></p>
     * @param integer $Domain <p>adp DOMAIN: 1=development DOMAIN, 2=production DOMAIN<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>adp_DOMAIN_UNSPECIFIED</td><td>0</td><td>not specified</td></tr><tr><td>adp_DOMAIN_DEV</td><td>1</td><td>development DOMAIN</td></tr><tr><td>adp_DOMAIN_PROD</td><td>2</td><td>production DOMAIN</td></tr></tbody></table></p>
     * @param string $VisitorId <p>Visitor ID</p>
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
        if (array_key_exists("CallSource",$param) and $param["CallSource"] !== null) {
            $this->CallSource = $param["CallSource"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("VisitorId",$param) and $param["VisitorId"] !== null) {
            $this->VisitorId = $param["VisitorId"];
        }
    }
}
