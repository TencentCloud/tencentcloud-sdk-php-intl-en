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
 * DescribeLabel request structure.
 *
 * @method string getKbId() Obtain <p>ID of the knowledge base it belongs to</p>
 * @method void setKbId(string $KbId) Set <p>ID of the knowledge base it belongs to</p>
 * @method string getLabelId() Obtain <p>Tag ID.</p>
 * @method void setLabelId(string $LabelId) Set <p>Tag ID.</p>
 * @method array getFilterList() Obtain <p>Common filter.</p>
 * @method void setFilterList(array $FilterList) Set <p>Common filter.</p>
 * @method string getLastTermId() Obtain <p>Standard term ID of the scroll loading cursor (pass 0 for the first request, and subsequently pass the TermId of the last item on the previous page)</p>
 * @method void setLastTermId(string $LastTermId) Set <p>Standard term ID of the scroll loading cursor (pass 0 for the first request, and subsequently pass the TermId of the last item on the previous page)</p>
 * @method integer getLimit() Obtain <p>Number of items to load at a time. Default: 10. Maximum: 100</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items to load at a time. Default: 10. Maximum: 100</p>
 * @method string getQuery() Obtain <p>Keyword search</p>
 * @method void setQuery(string $Query) Set <p>Keyword search</p>
 */
class DescribeLabelRequest extends AbstractModel
{
    /**
     * @var string <p>ID of the knowledge base it belongs to</p>
     */
    public $KbId;

    /**
     * @var string <p>Tag ID.</p>
     */
    public $LabelId;

    /**
     * @var array <p>Common filter.</p>
     */
    public $FilterList;

    /**
     * @var string <p>Standard term ID of the scroll loading cursor (pass 0 for the first request, and subsequently pass the TermId of the last item on the previous page)</p>
     */
    public $LastTermId;

    /**
     * @var integer <p>Number of items to load at a time. Default: 10. Maximum: 100</p>
     */
    public $Limit;

    /**
     * @var string <p>Keyword search</p>
     */
    public $Query;

    /**
     * @param string $KbId <p>ID of the knowledge base it belongs to</p>
     * @param string $LabelId <p>Tag ID.</p>
     * @param array $FilterList <p>Common filter.</p>
     * @param string $LastTermId <p>Standard term ID of the scroll loading cursor (pass 0 for the first request, and subsequently pass the TermId of the last item on the previous page)</p>
     * @param integer $Limit <p>Number of items to load at a time. Default: 10. Maximum: 100</p>
     * @param string $Query <p>Keyword search</p>
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
        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("LastTermId",$param) and $param["LastTermId"] !== null) {
            $this->LastTermId = $param["LastTermId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }
    }
}
