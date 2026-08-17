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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeParamTemplates request structure.
 *
 * @method array getProductTypes() Obtain <p>Specified query for product version and architecture.</p><ul><li>6: Redis 4.0 standard architecture;</li><li>7: Redis 4.0 cluster architecture;</li><li>8: Redis 5.0 standard architecture;</li><li>9: Redis 5.0 cluster architecture;</li><li>15: Redis 6.2 standard architecture;</li><li>16: Redis 6.2 cluster architecture;</li><li>17: Redis 7.0 standard architecture;</li><li>18: Redis 7.0 cluster architecture;</li><li>19: ValKey 8.0 standard architecture;</li><li>20: ValKey 8.0 cluster architecture.</li></ul>
 * @method void setProductTypes(array $ProductTypes) Set <p>Specified query for product version and architecture.</p><ul><li>6: Redis 4.0 standard architecture;</li><li>7: Redis 4.0 cluster architecture;</li><li>8: Redis 5.0 standard architecture;</li><li>9: Redis 5.0 cluster architecture;</li><li>15: Redis 6.2 standard architecture;</li><li>16: Redis 6.2 cluster architecture;</li><li>17: Redis 7.0 standard architecture;</li><li>18: Redis 7.0 cluster architecture;</li><li>19: ValKey 8.0 standard architecture;</li><li>20: ValKey 8.0 cluster architecture.</li></ul>
 * @method array getTemplateNames() Obtain <p>Specify the parameter template name for the query.</p><ul><li>Data type: string array, with a maximum length limit of 50.</li><li>Method for obtaining: Copy the Template name of a custom template or system default template on the <a href="https://console.cloud.tencent.com/redis/templates">parameter template page in the Redis console</a>.</li></ul>
 * @method void setTemplateNames(array $TemplateNames) Set <p>Specify the parameter template name for the query.</p><ul><li>Data type: string array, with a maximum length limit of 50.</li><li>Method for obtaining: Copy the Template name of a custom template or system default template on the <a href="https://console.cloud.tencent.com/redis/templates">parameter template page in the Redis console</a>.</li></ul>
 * @method array getTemplateIds() Obtain <p>Parameter template ID specified for query.</p><ul><li>Data type: string array, with a maximum length limit of 50.</li><li>Method for obtaining: Copy the template ID of a custom template or system default template on the <a href="https://console.cloud.tencent.com/redis/templates">parameter template page in the Redis console</a>.</li></ul>
 * @method void setTemplateIds(array $TemplateIds) Set <p>Parameter template ID specified for query.</p><ul><li>Data type: string array, with a maximum length limit of 50.</li><li>Method for obtaining: Copy the template ID of a custom template or system default template on the <a href="https://console.cloud.tencent.com/redis/templates">parameter template page in the Redis console</a>.</li></ul>
 * @method integer getLimit() Obtain <p>Specify the pagination size of the query result, which is the number of records returned per page.</p><ul><li>Value ranges from 0–200.</li><li>Default value: 200.</li></ul>
 * @method void setLimit(integer $Limit) Set <p>Specify the pagination size of the query result, which is the number of records returned per page.</p><ul><li>Value ranges from 0–200.</li><li>Default value: 200.</li></ul>
 * @method integer getOffset() Obtain <p>Pagination offset, used to specify the starting position of the query result.</p><ul><li>Value: Must be an integral multiple of Limit. Default value is 0.</li><li>Calculation formula: offset=limit*(page number-1).</li></ul>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset, used to specify the starting position of the query result.</p><ul><li>Value: Must be an integral multiple of Limit. Default value is 0.</li><li>Calculation formula: offset=limit*(page number-1).</li></ul>
 */
class DescribeParamTemplatesRequest extends AbstractModel
{
    /**
     * @var array <p>Specified query for product version and architecture.</p><ul><li>6: Redis 4.0 standard architecture;</li><li>7: Redis 4.0 cluster architecture;</li><li>8: Redis 5.0 standard architecture;</li><li>9: Redis 5.0 cluster architecture;</li><li>15: Redis 6.2 standard architecture;</li><li>16: Redis 6.2 cluster architecture;</li><li>17: Redis 7.0 standard architecture;</li><li>18: Redis 7.0 cluster architecture;</li><li>19: ValKey 8.0 standard architecture;</li><li>20: ValKey 8.0 cluster architecture.</li></ul>
     */
    public $ProductTypes;

    /**
     * @var array <p>Specify the parameter template name for the query.</p><ul><li>Data type: string array, with a maximum length limit of 50.</li><li>Method for obtaining: Copy the Template name of a custom template or system default template on the <a href="https://console.cloud.tencent.com/redis/templates">parameter template page in the Redis console</a>.</li></ul>
     */
    public $TemplateNames;

    /**
     * @var array <p>Parameter template ID specified for query.</p><ul><li>Data type: string array, with a maximum length limit of 50.</li><li>Method for obtaining: Copy the template ID of a custom template or system default template on the <a href="https://console.cloud.tencent.com/redis/templates">parameter template page in the Redis console</a>.</li></ul>
     */
    public $TemplateIds;

    /**
     * @var integer <p>Specify the pagination size of the query result, which is the number of records returned per page.</p><ul><li>Value ranges from 0–200.</li><li>Default value: 200.</li></ul>
     */
    public $Limit;

    /**
     * @var integer <p>Pagination offset, used to specify the starting position of the query result.</p><ul><li>Value: Must be an integral multiple of Limit. Default value is 0.</li><li>Calculation formula: offset=limit*(page number-1).</li></ul>
     */
    public $Offset;

    /**
     * @param array $ProductTypes <p>Specified query for product version and architecture.</p><ul><li>6: Redis 4.0 standard architecture;</li><li>7: Redis 4.0 cluster architecture;</li><li>8: Redis 5.0 standard architecture;</li><li>9: Redis 5.0 cluster architecture;</li><li>15: Redis 6.2 standard architecture;</li><li>16: Redis 6.2 cluster architecture;</li><li>17: Redis 7.0 standard architecture;</li><li>18: Redis 7.0 cluster architecture;</li><li>19: ValKey 8.0 standard architecture;</li><li>20: ValKey 8.0 cluster architecture.</li></ul>
     * @param array $TemplateNames <p>Specify the parameter template name for the query.</p><ul><li>Data type: string array, with a maximum length limit of 50.</li><li>Method for obtaining: Copy the Template name of a custom template or system default template on the <a href="https://console.cloud.tencent.com/redis/templates">parameter template page in the Redis console</a>.</li></ul>
     * @param array $TemplateIds <p>Parameter template ID specified for query.</p><ul><li>Data type: string array, with a maximum length limit of 50.</li><li>Method for obtaining: Copy the template ID of a custom template or system default template on the <a href="https://console.cloud.tencent.com/redis/templates">parameter template page in the Redis console</a>.</li></ul>
     * @param integer $Limit <p>Specify the pagination size of the query result, which is the number of records returned per page.</p><ul><li>Value ranges from 0–200.</li><li>Default value: 200.</li></ul>
     * @param integer $Offset <p>Pagination offset, used to specify the starting position of the query result.</p><ul><li>Value: Must be an integral multiple of Limit. Default value is 0.</li><li>Calculation formula: offset=limit*(page number-1).</li></ul>
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
        if (array_key_exists("ProductTypes",$param) and $param["ProductTypes"] !== null) {
            $this->ProductTypes = $param["ProductTypes"];
        }

        if (array_key_exists("TemplateNames",$param) and $param["TemplateNames"] !== null) {
            $this->TemplateNames = $param["TemplateNames"];
        }

        if (array_key_exists("TemplateIds",$param) and $param["TemplateIds"] !== null) {
            $this->TemplateIds = $param["TemplateIds"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
