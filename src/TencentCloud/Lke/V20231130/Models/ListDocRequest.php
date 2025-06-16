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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListDoc request structure.
 *
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method integer getPageNumber() Obtain Page number.
 * @method void setPageNumber(integer $PageNumber) Set Page number.
 * @method integer getPageSize() Obtain Quantity per page.
 * @method void setPageSize(integer $PageSize) Set Quantity per page.
 * @method string getQuery() Obtain Query content.
 * @method void setQuery(string $Query) Set Query content.
 * @method array getStatus() Obtain Document status : 1: not generated; 2: generating; 3: generation successful; 4: generation failed; 5: deleting; 6: deleted successfully; 7: under review; 8: review failed; 9: review successful; 10: pending release; 11: releasing; 12: released; 13: learning; 14: learning failed; 15: updating; 16: update failed; 17: parsing; 18: parsing failed; 19: import failed; 20: expired; 21: excessive invalid; 22: excessive invalid recovered.
 * @method void setStatus(array $Status) Set Document status : 1: not generated; 2: generating; 3: generation successful; 4: generation failed; 5: deleting; 6: deleted successfully; 7: under review; 8: review failed; 9: review successful; 10: pending release; 11: releasing; 12: released; 13: learning; 14: learning failed; 15: updating; 16: update failed; 17: parsing; 18: parsing failed; 19: import failed; 20: expired; 21: excessive invalid; 22: excessive invalid recovered.
 * @method string getQueryType() Obtain Query type: filename - document; attribute - label.
 * @method void setQueryType(string $QueryType) Set Query type: filename - document; attribute - label.
 * @method string getCateBizId() Obtain Category ID.
 * @method void setCateBizId(string $CateBizId) Set Category ID.
 * @method array getFileTypes() Obtain File type classification and filtering.
 * @method void setFileTypes(array $FileTypes) Set File type classification and filtering.
 * @method array getFilterFlag() Obtain Document list filter flag
 * @method void setFilterFlag(array $FilterFlag) Set Document list filter flag
 */
class ListDocRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var integer Page number.
     */
    public $PageNumber;

    /**
     * @var integer Quantity per page.
     */
    public $PageSize;

    /**
     * @var string Query content.
     */
    public $Query;

    /**
     * @var array Document status : 1: not generated; 2: generating; 3: generation successful; 4: generation failed; 5: deleting; 6: deleted successfully; 7: under review; 8: review failed; 9: review successful; 10: pending release; 11: releasing; 12: released; 13: learning; 14: learning failed; 15: updating; 16: update failed; 17: parsing; 18: parsing failed; 19: import failed; 20: expired; 21: excessive invalid; 22: excessive invalid recovered.
     */
    public $Status;

    /**
     * @var string Query type: filename - document; attribute - label.
     */
    public $QueryType;

    /**
     * @var string Category ID.
     */
    public $CateBizId;

    /**
     * @var array File type classification and filtering.
     */
    public $FileTypes;

    /**
     * @var array Document list filter flag
     */
    public $FilterFlag;

    /**
     * @param string $BotBizId Application ID.
     * @param integer $PageNumber Page number.
     * @param integer $PageSize Quantity per page.
     * @param string $Query Query content.
     * @param array $Status Document status : 1: not generated; 2: generating; 3: generation successful; 4: generation failed; 5: deleting; 6: deleted successfully; 7: under review; 8: review failed; 9: review successful; 10: pending release; 11: releasing; 12: released; 13: learning; 14: learning failed; 15: updating; 16: update failed; 17: parsing; 18: parsing failed; 19: import failed; 20: expired; 21: excessive invalid; 22: excessive invalid recovered.
     * @param string $QueryType Query type: filename - document; attribute - label.
     * @param string $CateBizId Category ID.
     * @param array $FileTypes File type classification and filtering.
     * @param array $FilterFlag Document list filter flag
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }

        if (array_key_exists("FileTypes",$param) and $param["FileTypes"] !== null) {
            $this->FileTypes = $param["FileTypes"];
        }

        if (array_key_exists("FilterFlag",$param) and $param["FilterFlag"] !== null) {
            $this->FilterFlag = [];
            foreach ($param["FilterFlag"] as $key => $value){
                $obj = new DocFilterFlag();
                $obj->deserialize($value);
                array_push($this->FilterFlag, $obj);
            }
        }
    }
}
