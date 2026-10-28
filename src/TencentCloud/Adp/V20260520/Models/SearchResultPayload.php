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
 * Result payload
 *
 * @method string getGraphData() Obtain <p>Additional information of knowledge graph (JSON string)</p>
 * @method void setGraphData(string $GraphData) Set <p>Additional information of knowledge graph (JSON string)</p>
 * @method array getImageUrlList() Obtain <p>List of hit image URLs</p>
 * @method void setImageUrlList(array $ImageUrlList) Set <p>List of hit image URLs</p>
 * @method string getSheetInfo() Obtain <p>Table additional information (JSON string)</p>
 * @method void setSheetInfo(string $SheetInfo) Set <p>Table additional information (JSON string)</p>
 */
class SearchResultPayload extends AbstractModel
{
    /**
     * @var string <p>Additional information of knowledge graph (JSON string)</p>
     */
    public $GraphData;

    /**
     * @var array <p>List of hit image URLs</p>
     */
    public $ImageUrlList;

    /**
     * @var string <p>Table additional information (JSON string)</p>
     */
    public $SheetInfo;

    /**
     * @param string $GraphData <p>Additional information of knowledge graph (JSON string)</p>
     * @param array $ImageUrlList <p>List of hit image URLs</p>
     * @param string $SheetInfo <p>Table additional information (JSON string)</p>
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
        if (array_key_exists("GraphData",$param) and $param["GraphData"] !== null) {
            $this->GraphData = $param["GraphData"];
        }

        if (array_key_exists("ImageUrlList",$param) and $param["ImageUrlList"] !== null) {
            $this->ImageUrlList = $param["ImageUrlList"];
        }

        if (array_key_exists("SheetInfo",$param) and $param["SheetInfo"] !== null) {
            $this->SheetInfo = $param["SheetInfo"];
        }
    }
}
