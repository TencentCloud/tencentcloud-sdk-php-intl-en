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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTags request structure.
 *
 * @method string getPaginationToken() Obtain The token value of the next page obtained from the response of the previous page.
Leave it empty for the first request.
 * @method void setPaginationToken(string $PaginationToken) Set The token value of the next page obtained from the response of the previous page.
Leave it empty for the first request.
 * @method integer getMaxResults() Obtain Number of data entries to return per page (up to 1,000).
Default value: 50.
 * @method void setMaxResults(integer $MaxResults) Set Number of data entries to return per page (up to 1,000).
Default value: 50.
 * @method array getTagKeys() Obtain Tag key.
All tags corresponding to the list of tag keys.
Maximum length: 20
 * @method void setTagKeys(array $TagKeys) Set Tag key.
All tags corresponding to the list of tag keys.
Maximum length: 20
 * @method string getCategory() Obtain Tag type. Valid values: Custom: custom tag; System: system tag; All: all tags. Default value: All.
 * @method void setCategory(string $Category) Set Tag type. Valid values: Custom: custom tag; System: system tag; All: all tags. Default value: All.
 */
class GetTagsRequest extends AbstractModel
{
    /**
     * @var string The token value of the next page obtained from the response of the previous page.
Leave it empty for the first request.
     */
    public $PaginationToken;

    /**
     * @var integer Number of data entries to return per page (up to 1,000).
Default value: 50.
     */
    public $MaxResults;

    /**
     * @var array Tag key.
All tags corresponding to the list of tag keys.
Maximum length: 20
     */
    public $TagKeys;

    /**
     * @var string Tag type. Valid values: Custom: custom tag; System: system tag; All: all tags. Default value: All.
     */
    public $Category;

    /**
     * @param string $PaginationToken The token value of the next page obtained from the response of the previous page.
Leave it empty for the first request.
     * @param integer $MaxResults Number of data entries to return per page (up to 1,000).
Default value: 50.
     * @param array $TagKeys Tag key.
All tags corresponding to the list of tag keys.
Maximum length: 20
     * @param string $Category Tag type. Valid values: Custom: custom tag; System: system tag; All: all tags. Default value: All.
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
        if (array_key_exists("PaginationToken",$param) and $param["PaginationToken"] !== null) {
            $this->PaginationToken = $param["PaginationToken"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
