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
 * EnableCaches request structure.
 *
 * @method array getUrls() Obtain List of unblocked URLs
 * @method void setUrls(array $Urls) Set List of unblocked URLs
 * @method string getDate() Obtain URL blocking date
 * @method void setDate(string $Date) Set URL blocking date
 */
class EnableCachesRequest extends AbstractModel
{
    /**
     * @var array List of unblocked URLs
     */
    public $Urls;

    /**
     * @var string URL blocking date
     */
    public $Date;

    /**
     * @param array $Urls List of unblocked URLs
     * @param string $Date URL blocking date
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
        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            $this->Urls = $param["Urls"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
