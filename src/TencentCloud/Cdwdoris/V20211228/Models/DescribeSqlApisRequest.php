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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSqlApis request structure.
 *
 * @method string getWhiteHost() Obtain The IP address of the user link
 * @method void setWhiteHost(string $WhiteHost) Set The IP address of the user link
 * @method string getCatalog() Obtain catalog name
 * @method void setCatalog(string $Catalog) Set catalog name
 * @method array getCatalogs() Obtain Catalog collection
 * @method void setCatalogs(array $Catalogs) Set Catalog collection
 */
class DescribeSqlApisRequest extends AbstractModel
{
    /**
     * @var string The IP address of the user link
     */
    public $WhiteHost;

    /**
     * @var string catalog name
     */
    public $Catalog;

    /**
     * @var array Catalog collection
     */
    public $Catalogs;

    /**
     * @param string $WhiteHost The IP address of the user link
     * @param string $Catalog catalog name
     * @param array $Catalogs Catalog collection
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
        if (array_key_exists("WhiteHost",$param) and $param["WhiteHost"] !== null) {
            $this->WhiteHost = $param["WhiteHost"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("Catalogs",$param) and $param["Catalogs"] !== null) {
            $this->Catalogs = $param["Catalogs"];
        }
    }
}
