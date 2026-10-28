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
 * Search filter configuration
 *
 * @method boolean getOnlyRetrievalSelectedLabel() Obtain <p>Whether to retrieve only selected tags. true: retrieve only knowledge with selected tags; false: simultaneous retrieval of knowledge with selected tags and knowledge without any tags</p>
 * @method void setOnlyRetrievalSelectedLabel(boolean $OnlyRetrievalSelectedLabel) Set <p>Whether to retrieve only selected tags. true: retrieve only knowledge with selected tags; false: simultaneous retrieval of knowledge with selected tags and knowledge without any tags</p>
 * @method SearchFilter getSearchFilter() Obtain <p>Search filter</p>
 * @method void setSearchFilter(SearchFilter $SearchFilter) Set <p>Search filter</p>
 */
class SearchFilterConfig extends AbstractModel
{
    /**
     * @var boolean <p>Whether to retrieve only selected tags. true: retrieve only knowledge with selected tags; false: simultaneous retrieval of knowledge with selected tags and knowledge without any tags</p>
     */
    public $OnlyRetrievalSelectedLabel;

    /**
     * @var SearchFilter <p>Search filter</p>
     */
    public $SearchFilter;

    /**
     * @param boolean $OnlyRetrievalSelectedLabel <p>Whether to retrieve only selected tags. true: retrieve only knowledge with selected tags; false: simultaneous retrieval of knowledge with selected tags and knowledge without any tags</p>
     * @param SearchFilter $SearchFilter <p>Search filter</p>
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
        if (array_key_exists("OnlyRetrievalSelectedLabel",$param) and $param["OnlyRetrievalSelectedLabel"] !== null) {
            $this->OnlyRetrievalSelectedLabel = $param["OnlyRetrievalSelectedLabel"];
        }

        if (array_key_exists("SearchFilter",$param) and $param["SearchFilter"] !== null) {
            $this->SearchFilter = new SearchFilter();
            $this->SearchFilter->deserialize($param["SearchFilter"]);
        }
    }
}
