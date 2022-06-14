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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLS log search result
 *
 * @method string getContext() Obtain Cursor for more search results
 * @method void setContext(string $Context) Set Cursor for more search results
 * @method boolean getListover() Obtain Whether all search results have been returned
 * @method void setListover(boolean $Listover) Set Whether all search results have been returned
 * @method array getResults() Obtain Log content information
 * @method void setResults(array $Results) Set Log content information
 */
class ClsSearchLogs extends AbstractModel
{
    /**
     * @var string Cursor for more search results
     */
    public $Context;

    /**
     * @var boolean Whether all search results have been returned
     */
    public $Listover;

    /**
     * @var array Log content information
     */
    public $Results;

    /**
     * @param string $Context Cursor for more search results
     * @param boolean $Listover Whether all search results have been returned
     * @param array $Results Log content information
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
        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Listover",$param) and $param["Listover"] !== null) {
            $this->Listover = $param["Listover"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new ClsLogObject();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }
    }
}
