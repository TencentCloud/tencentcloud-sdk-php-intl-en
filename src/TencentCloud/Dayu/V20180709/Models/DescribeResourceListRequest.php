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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceList request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type. `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `bgpip`: Anti-DDoS Advanced, `net`: Anti-DDoS Ultimate)
 * @method void setBusiness(string $Business) Set Anti-DDoS service type. `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `bgpip`: Anti-DDoS Advanced, `net`: Anti-DDoS Ultimate)
 * @method array getRegionList() Obtain Region code search, which is optional. If no regions are to be specified, enter an empty array. If a region is to be specified, enter a region code, such as ["gz", "sh"]
 * @method void setRegionList(array $RegionList) Set Region code search, which is optional. If no regions are to be specified, enter an empty array. If a region is to be specified, enter a region code, such as ["gz", "sh"]
 * @method array getLine() Obtain Line search. This field can be optionally entered only when getting the list of Anti-DDoS Advanced resources. Valid values: [1 (BGP line), 2 (Nanjing Telecom), 3 (Nanjing Unicom), 99 (third-party partner line)]. Please enter an empty array when getting other products;
 * @method void setLine(array $Line) Set Line search. This field can be optionally entered only when getting the list of Anti-DDoS Advanced resources. Valid values: [1 (BGP line), 2 (Nanjing Telecom), 3 (Nanjing Unicom), 99 (third-party partner line)]. Please enter an empty array when getting other products;
 * @method array getIdList() Obtain Resource ID search, which is optional. If this field is not an empty array, it means to get the resource list of a specified resource;
 * @method void setIdList(array $IdList) Set Resource ID search, which is optional. If this field is not an empty array, it means to get the resource list of a specified resource;
 * @method string getName() Obtain Resource name search, which is optional. If this field is not an empty string, it means to search for resources by name;
 * @method void setName(string $Name) Set Resource name search, which is optional. If this field is not an empty string, it means to search for resources by name;
 * @method array getIpList() Obtain IP query list, which is optional. Resources will be queried by IP if the list is not empty.
 * @method void setIpList(array $IpList) Set IP query list, which is optional. Resources will be queried by IP if the list is not empty.
 * @method array getStatus() Obtain Resource status search list, which is optional. Valid values: [0 (running), 1 (cleansing), 2 (blocking)]. No status search will be performed if an empty array is entered;
 * @method void setStatus(array $Status) Set Resource status search list, which is optional. Valid values: [0 (running), 1 (cleansing), 2 (blocking)]. No status search will be performed if an empty array is entered;
 * @method integer getExpire() Obtain Expiring resource search, which is optional. Valid values: [0 (no search), 1 (search for expiring resources)]
 * @method void setExpire(integer $Expire) Set Expiring resource search, which is optional. Valid values: [0 (no search), 1 (search for expiring resources)]
 * @method array getOderBy() Obtain Sort by field, which is optional
 * @method void setOderBy(array $OderBy) Set Sort by field, which is optional
 * @method integer getLimit() Obtain Number of entries per page. A value of 0 means no pagination
 * @method void setLimit(integer $Limit) Set Number of entries per page. A value of 0 means no pagination
 * @method integer getOffset() Obtain Page start offset, whose value is (page number - 1) * number of entries per page
 * @method void setOffset(integer $Offset) Set Page start offset, whose value is (page number - 1) * number of entries per page
 * @method string getCName() Obtain CNAME of Anti-DDoS Ultimate resource, which is optional and only valid for the Anti-DDoS Ultimate resource list;
 * @method void setCName(string $CName) Set CNAME of Anti-DDoS Ultimate resource, which is optional and only valid for the Anti-DDoS Ultimate resource list;
 * @method string getDomain() Obtain Domain name of Anti-DDoS Ultimate resource, which is optional and only valid for the Anti-DDoS Ultimate resource list;
 * @method void setDomain(string $Domain) Set Domain name of Anti-DDoS Ultimate resource, which is optional and only valid for the Anti-DDoS Ultimate resource list;
 */
class DescribeResourceListRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type. `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `bgpip`: Anti-DDoS Advanced, `net`: Anti-DDoS Ultimate)
     */
    public $Business;

    /**
     * @var array Region code search, which is optional. If no regions are to be specified, enter an empty array. If a region is to be specified, enter a region code, such as ["gz", "sh"]
     */
    public $RegionList;

    /**
     * @var array Line search. This field can be optionally entered only when getting the list of Anti-DDoS Advanced resources. Valid values: [1 (BGP line), 2 (Nanjing Telecom), 3 (Nanjing Unicom), 99 (third-party partner line)]. Please enter an empty array when getting other products;
     */
    public $Line;

    /**
     * @var array Resource ID search, which is optional. If this field is not an empty array, it means to get the resource list of a specified resource;
     */
    public $IdList;

    /**
     * @var string Resource name search, which is optional. If this field is not an empty string, it means to search for resources by name;
     */
    public $Name;

    /**
     * @var array IP query list, which is optional. Resources will be queried by IP if the list is not empty.
     */
    public $IpList;

    /**
     * @var array Resource status search list, which is optional. Valid values: [0 (running), 1 (cleansing), 2 (blocking)]. No status search will be performed if an empty array is entered;
     */
    public $Status;

    /**
     * @var integer Expiring resource search, which is optional. Valid values: [0 (no search), 1 (search for expiring resources)]
     */
    public $Expire;

    /**
     * @var array Sort by field, which is optional
     */
    public $OderBy;

    /**
     * @var integer Number of entries per page. A value of 0 means no pagination
     */
    public $Limit;

    /**
     * @var integer Page start offset, whose value is (page number - 1) * number of entries per page
     */
    public $Offset;

    /**
     * @var string CNAME of Anti-DDoS Ultimate resource, which is optional and only valid for the Anti-DDoS Ultimate resource list;
     */
    public $CName;

    /**
     * @var string Domain name of Anti-DDoS Ultimate resource, which is optional and only valid for the Anti-DDoS Ultimate resource list;
     */
    public $Domain;

    /**
     * @param string $Business Anti-DDoS service type. `bgp`: Anti-DDoS Pro (single IP), `bgp-multip`: Anti-DDoS Pro (multi-IP), `bgpip`: Anti-DDoS Advanced, `net`: Anti-DDoS Ultimate)
     * @param array $RegionList Region code search, which is optional. If no regions are to be specified, enter an empty array. If a region is to be specified, enter a region code, such as ["gz", "sh"]
     * @param array $Line Line search. This field can be optionally entered only when getting the list of Anti-DDoS Advanced resources. Valid values: [1 (BGP line), 2 (Nanjing Telecom), 3 (Nanjing Unicom), 99 (third-party partner line)]. Please enter an empty array when getting other products;
     * @param array $IdList Resource ID search, which is optional. If this field is not an empty array, it means to get the resource list of a specified resource;
     * @param string $Name Resource name search, which is optional. If this field is not an empty string, it means to search for resources by name;
     * @param array $IpList IP query list, which is optional. Resources will be queried by IP if the list is not empty.
     * @param array $Status Resource status search list, which is optional. Valid values: [0 (running), 1 (cleansing), 2 (blocking)]. No status search will be performed if an empty array is entered;
     * @param integer $Expire Expiring resource search, which is optional. Valid values: [0 (no search), 1 (search for expiring resources)]
     * @param array $OderBy Sort by field, which is optional
     * @param integer $Limit Number of entries per page. A value of 0 means no pagination
     * @param integer $Offset Page start offset, whose value is (page number - 1) * number of entries per page
     * @param string $CName CNAME of Anti-DDoS Ultimate resource, which is optional and only valid for the Anti-DDoS Ultimate resource list;
     * @param string $Domain Domain name of Anti-DDoS Ultimate resource, which is optional and only valid for the Anti-DDoS Ultimate resource list;
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("RegionList",$param) and $param["RegionList"] !== null) {
            $this->RegionList = $param["RegionList"];
        }

        if (array_key_exists("Line",$param) and $param["Line"] !== null) {
            $this->Line = $param["Line"];
        }

        if (array_key_exists("IdList",$param) and $param["IdList"] !== null) {
            $this->IdList = $param["IdList"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Expire",$param) and $param["Expire"] !== null) {
            $this->Expire = $param["Expire"];
        }

        if (array_key_exists("OderBy",$param) and $param["OderBy"] !== null) {
            $this->OderBy = [];
            foreach ($param["OderBy"] as $key => $value){
                $obj = new OrderBy();
                $obj->deserialize($value);
                array_push($this->OderBy, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("CName",$param) and $param["CName"] !== null) {
            $this->CName = $param["CName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
