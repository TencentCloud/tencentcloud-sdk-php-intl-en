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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Usage item of an individual object in the ranking list, including the object identifier, statistical values within a time period (Stats), and a list of time series points within a time period (Series, returned only when ShowAll=false).
 *
 * @method integer getRank() Obtain Global ranking (starting from 1). In pagination scenarios, this is still the position in the full sorting order, not the serial number within the page.
 * @method void setRank(integer $Rank) Set Global ranking (starting from 1). In pagination scenarios, this is still the position in the full sorting order, not the serial number within the page.
 * @method string getKey() Obtain Object identifier. The apikey dimension is the APIKey ID; the endpoint dimension is the access point; the model dimension is the model name.
 * @method void setKey(string $Key) Set Object identifier. The apikey dimension is the APIKey ID; the endpoint dimension is the access point; the model dimension is the model name.
 * @method string getName() Obtain Display name of the object. In the apikey dimension, return the APIKey name (deleted APIKeys retain their original names);
Key whose endpoint and model dimensions are equal.
 * @method void setName(string $Name) Set Display name of the object. In the apikey dimension, return the APIKey name (deleted APIKeys retain their original names);
Key whose endpoint and model dimensions are equal.
 * @method UsageStats getStats() Obtain Statistical value within a time period
 * @method void setStats(UsageStats $Stats) Set Statistical value within a time period
 * @method UsageSeries getSeries() Obtain List of time series points within a time period
 * @method void setSeries(UsageSeries $Series) Set List of time series points within a time period
 */
class UsageRankItem extends AbstractModel
{
    /**
     * @var integer Global ranking (starting from 1). In pagination scenarios, this is still the position in the full sorting order, not the serial number within the page.
     */
    public $Rank;

    /**
     * @var string Object identifier. The apikey dimension is the APIKey ID; the endpoint dimension is the access point; the model dimension is the model name.
     */
    public $Key;

    /**
     * @var string Display name of the object. In the apikey dimension, return the APIKey name (deleted APIKeys retain their original names);
Key whose endpoint and model dimensions are equal.
     */
    public $Name;

    /**
     * @var UsageStats Statistical value within a time period
     */
    public $Stats;

    /**
     * @var UsageSeries List of time series points within a time period
     */
    public $Series;

    /**
     * @param integer $Rank Global ranking (starting from 1). In pagination scenarios, this is still the position in the full sorting order, not the serial number within the page.
     * @param string $Key Object identifier. The apikey dimension is the APIKey ID; the endpoint dimension is the access point; the model dimension is the model name.
     * @param string $Name Display name of the object. In the apikey dimension, return the APIKey name (deleted APIKeys retain their original names);
Key whose endpoint and model dimensions are equal.
     * @param UsageStats $Stats Statistical value within a time period
     * @param UsageSeries $Series List of time series points within a time period
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
        if (array_key_exists("Rank",$param) and $param["Rank"] !== null) {
            $this->Rank = $param["Rank"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Stats",$param) and $param["Stats"] !== null) {
            $this->Stats = new UsageStats();
            $this->Stats->deserialize($param["Stats"]);
        }

        if (array_key_exists("Series",$param) and $param["Series"] !== null) {
            $this->Series = new UsageSeries();
            $this->Series->deserialize($param["Series"]);
        }
    }
}
