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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHealthCheckTemplates request structure.
 *
 * @method array getFilters() Obtain <p>Filter. Query health check templates by specifying filter criteria. Supported:</p><ul><li>Name is <strong>HealthCheckTemplateName</strong>. Filter health check templates by name. <strong>Values</strong> is a template name list.</li><li>Name is <strong>HealthCheckProtocol</strong>. Filter health check templates by health check protocol. <strong>Values</strong> is a protocol list.</li><li>Filter by tag.</li></ul>
 * @method void setFilters(array $Filters) Set <p>Filter. Query health check templates by specifying filter criteria. Supported:</p><ul><li>Name is <strong>HealthCheckTemplateName</strong>. Filter health check templates by name. <strong>Values</strong> is a template name list.</li><li>Name is <strong>HealthCheckProtocol</strong>. Filter health check templates by health check protocol. <strong>Values</strong> is a protocol list.</li><li>Filter by tag.</li></ul>
 * @method array getHealthCheckTemplateIds() Obtain <p>Health check template ID list. The ID format is hct- followed by alphanumeric characters.</p>
 * @method void setHealthCheckTemplateIds(array $HealthCheckTemplateIds) Set <p>Health check template ID list. The ID format is hct- followed by alphanumeric characters.</p>
 * @method string getMaxResults() Obtain <p>The number of returned lists. Default value: 20. Maximum value: 100.</p>
 * @method void setMaxResults(string $MaxResults) Set <p>The number of returned lists. Default value: 20. Maximum value: 100.</p>
 * @method string getNextToken() Obtain <p>Token for the next query. Not required for the first query or when there is no next query.<br>If there is a next query, the value is the NextToken returned from the last API call.</p>
 * @method void setNextToken(string $NextToken) Set <p>Token for the next query. Not required for the first query or when there is no next query.<br>If there is a next query, the value is the NextToken returned from the last API call.</p>
 */
class DescribeHealthCheckTemplatesRequest extends AbstractModel
{
    /**
     * @var array <p>Filter. Query health check templates by specifying filter criteria. Supported:</p><ul><li>Name is <strong>HealthCheckTemplateName</strong>. Filter health check templates by name. <strong>Values</strong> is a template name list.</li><li>Name is <strong>HealthCheckProtocol</strong>. Filter health check templates by health check protocol. <strong>Values</strong> is a protocol list.</li><li>Filter by tag.</li></ul>
     */
    public $Filters;

    /**
     * @var array <p>Health check template ID list. The ID format is hct- followed by alphanumeric characters.</p>
     */
    public $HealthCheckTemplateIds;

    /**
     * @var string <p>The number of returned lists. Default value: 20. Maximum value: 100.</p>
     */
    public $MaxResults;

    /**
     * @var string <p>Token for the next query. Not required for the first query or when there is no next query.<br>If there is a next query, the value is the NextToken returned from the last API call.</p>
     */
    public $NextToken;

    /**
     * @param array $Filters <p>Filter. Query health check templates by specifying filter criteria. Supported:</p><ul><li>Name is <strong>HealthCheckTemplateName</strong>. Filter health check templates by name. <strong>Values</strong> is a template name list.</li><li>Name is <strong>HealthCheckProtocol</strong>. Filter health check templates by health check protocol. <strong>Values</strong> is a protocol list.</li><li>Filter by tag.</li></ul>
     * @param array $HealthCheckTemplateIds <p>Health check template ID list. The ID format is hct- followed by alphanumeric characters.</p>
     * @param string $MaxResults <p>The number of returned lists. Default value: 20. Maximum value: 100.</p>
     * @param string $NextToken <p>Token for the next query. Not required for the first query or when there is no next query.<br>If there is a next query, the value is the NextToken returned from the last API call.</p>
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("HealthCheckTemplateIds",$param) and $param["HealthCheckTemplateIds"] !== null) {
            $this->HealthCheckTemplateIds = $param["HealthCheckTemplateIds"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }
    }
}
