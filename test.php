
<c:set var="name" value="코요" />
 
<c:choose> 
    <c:when test="${name eq '새박'}">
        <a>저의 이름은 새박입니다.</a>
    </c:when>
    <c:when test="${name eq '샘샘'}">
        <a>저의 이름은 샘샘입니다.</a>
    </c:when>
    <c:when test="${name eq '박샘'}">
        <a>저의 이름은 박샘입니다.</a>
    </c:when>
    <c:otherwise>
        <a>내이름은 무엇인가</a>
    </c:otherwise>
</c:choose>
